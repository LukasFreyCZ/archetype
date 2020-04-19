<?php

namespace PHPFileManipulator\Endpoints\Laravel;

use Illuminate\Support\Str;
use PHPFileManipulator\Support\EndpointProvider;

class Template extends EndpointProvider
{
    public function getHandlerMethod($signature, $args)
    {
        return $this->file->templates()->contains($signature) ? 'fromTemplate' : false;
    }

    public function __call($method, $args)
    {
        return $this->fromTemplate($method, ...$args);
    }

    public function fromTemplate($name, $path)
    {
        $file = $this->file->fromString($this->getCode($name, $path));
        $file->outputDriver($this->createOutputDriver($path));

        return $file;
    }

    protected function createOutputDriver($path)
    {
        $outputDriverClass = config('php-file-manipulator.output', \PHPFileManipulator\Drivers\FileOutput::class);
        $outputDriver = new $outputDriverClass;
        $outputDriver->filename = $path;
        $outputDriver->extension = 'php';
        $outputDriver->relativeDir = 'app';

        return $outputDriver;
    }

    protected function getCode($name, $path)
    {
        $template = $this->getTemplate($name);
        $replacementPairs = $this->defaultReplacementPairs($name, $path);
        
        foreach($replacementPairs as $key => $value) {
            $template = str_replace($key, $value, $template);
        }

        return $template;
    }

    protected function getTemplate($name)
    {
        // Get default stub from Illuminate
        $laravelStubDir = 'vendor/laravel/framework/src/Illuminate/Foundation/Console/stubs/';
        $fileName = str_replace('_', '.', $name);
        $fileName = Str::kebab($fileName) . '.stub';

        // Make it parsable by replacing by removing blade syntax, ie {{ namespace }} -> ___namespace___
        return preg_replace_callback(
            '/\{\{\s(\w*)\s\}\}/m',
            function ($matches) {
                return "___$matches[1]___";
            },
            file_get_contents(base_path($laravelStubDir . $fileName))
        );
    }

    protected function defaultReplacementPairs($type, $name)
    {
        $defaults = [
            'model' => [
                '___class___' => $name,
                '___namespace___' => 'App',
            ],
            'controller' => [
                //'___class___' => $name,
                //'___namespace___' => 'App',
            ],            
        ];
        
        return $defaults[$type] ?? [];
    }
}