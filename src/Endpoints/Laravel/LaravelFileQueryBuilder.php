<?php

namespace Archetype\Endpoints\Laravel;

use Illuminate\Support\Str;
use Archetype\Endpoints\EndpointProvider;
use Archetype\Support\PSR2PrettyPrinter;
use PhpParser\ParserFactory;
use Illuminate\Support\Facades\Storage;
use UnexpectedValueException;
use Archetype\Traits\HasOperators;
use ReflectionClass;
use ReflectionMethod;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveCallbackFilterIterator;
use InvalidArgumentException;
use LaravelFile;

use Archetype\Endpoints\PHP\PHPFileQueryBuilder;

class LaravelFileQueryBuilder extends PHPFileQueryBuilder
{
    /**
     * @example Get the User file
     * @source LaravelFile::user()
     */
    public function user()
    {
        return $this->in('app')->where('className', 'User')->get()->first();
    }

    /**
     * @example Query migrations
     * @source LaravelFile::migrations()
     */    
    public function migrations()
    {
        return $this->in('database/migrations');
    }    

    /**
     * @example Query models
     * @source LaravelFile::models()
     */    
    public function models()
    {
        $this->instanceof('Illuminate\Database\Eloquent\Model');
        $this->isNotAbstract();

        return $this;
    }

    /**
     * @example Query models
     * @source LaravelFile::models()
     */    
    public function exceptUser()
    {
        $this->isNotUser();

        return $this;
    }    

    /**
     * @example Query controllers
     * @source LaravelFile::controllers()
     */        
    public function controllers()
    {
        return $this->instanceof('Illuminate\Routing\Controller');
    }

    /**
     * @example Query serviceProviders
     * @source LaravelFile::serviceProviders()
     */        
    public function serviceProviders()
    {
        return $this->instanceof('Illuminate\Support\ServiceProvider');
    }  

    protected function instanceof($class)
    {
        // Ensure we are in a directory context - default to base path
        if(!isset($this->baseDir)) $this->in('');

        $this->result = $this->result->filter(function($file) use($class) {
            $reflection = $file->getReflection();
            return $reflection && $reflection->isSubclassOf($class);
        });

        return $this;
    }

    protected function isNotAbstract()
    {
        $this->result = $this->result->filter(function($file) {
            $reflection = $file->getReflection();
            return $reflection && !$reflection->isAbstract();
        });

        return $this;        
    }

    protected function isNotUser()
    {
        $this->result = $this->result->filter(function($file) {
            return $file->className() != 'User';
        });

        return $this;         
    }
}