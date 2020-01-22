<?php

namespace PHPFileManipulator\Support;

use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Property;
use PhpParser\NodeFinder;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Name;
use PhpParser\JsonDecoder;

use PHPFile;
use InvalidArgumentException;

class Snippet
{
    public static function __callStatic($name, $args)
    {
        $replacementPairs = $args ? $args[0] : [];
        // Get all files containing snippets
        $containers = PHPFile::in(
            'packages/Ajthinking/PHPFileManipulator/src/snippets'
        )->get()->mapInto(static::class);
        
        // Find the first matching node
        $node = $containers->map(function($container) use($name) {
            return $container->getNodeByName($name);
        })->filter()->first();

        // If not found
        if(!$node) return null; //throw new InvalidArgumentException("Could not find snippet named $name");

        // Replace and return
        return static::replace($node, $replacementPairs);
    }

    public function __construct($file)
    {
        $this->file = $file;
    }

    public static function replace($node, $replacementPairs)
    {
        // REPLACE IDENTIFIERS
        // REPLACE NAMES        
        // REPLACE COMMENTS

        $text = json_encode($node);
        
        // SPLIT UP NAME IN PARTS WHERE NECESSARY!!!

        $text = str_replace(
            collect($replacementPairs)->keys()->toArray(),
            collect($replacementPairs)->values()->toArray(),
            $text
        );

        
        $node = (new JsonDecoder())->decode($text);

        return $node;        
    }


    
    private function getNodeByName($name)
    {
        return collect([
            $this->getMethodByName($name)
            // add more findable types here
        ])->filter()->first();
    }

    public function getMethodByName($requestedName)
    {
        return collect((new NodeFinder)->findInstanceOf(
            $this->file->ast(),
            ClassMethod::class
        ))->filter(function($node) use($requestedName) {
            return $node->name->name == $requestedName;
        })->first();
    }
}