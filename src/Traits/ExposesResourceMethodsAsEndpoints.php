<?php

namespace PHPFileManipulator\Traits;

use BadMethodCallException;
use ReflectionClass;
use Illuminate\Support\Str;

trait ExposesResourceMethodsAsEndpoints
{
    public function supportedEndpointMethods()
    {
        $reflection = new ReflectionClass(static::class);
        return collect($reflection->getMethods())
            ->filter(function($method) {
                if(collect([
                    '__call',
                    '__construct',
                    'canHandle',
                    'getEndpoints',
                    'getHandlerMethod',
                    'supportedEndpointMethods',
                    'aliases',
                ])->contains($method->name)) return false;

                if($method->isPublic()) return true;
            })->values();        
    }

    public function getEndpoints()
    {
        
        $methods = $this->ownNonReservedPublicMethods();

        return collect($methods)->map(function($verb) {
            $resourceSignature = collect($this->aliases())->first();
            $verbMap = [
                'get' => $resourceSignature,
                'set' => $resourceSignature,
                'add' => 'add' . $resourceSignature,
                'remove' => 'remove' . $resourceSignature,
            ];
            
            return $verbMap[$verb];
        })->unique()->toArray();
    }  
}