<?php

namespace Archetype\Traits;

trait PHPParserClassMap
{
    public function classMap($class = null)
    {
        $map = [    
            // CAMELCASEIFIED WITHOUT _ POSTFIX
            'arrayDimFetch' => '\PhpParser\Node\Expr\ArrayDimFetch',
            'arrayItem' => '\PhpParser\Node\Expr\ArrayItem',
            'array' => '\PhpParser\Node\Expr\Array_',
            'arrowFunction' => '\PhpParser\Node\Expr\ArrowFunction',
            'assign' => '\PhpParser\Node\Expr\Assign',
            'assignOp' => '\PhpParser\Node\Expr\AssignOp',
            'assignOp' => '\PhpParser\Node\Expr\AssignOp',
            'assignRef' => '\PhpParser\Node\Expr\AssignRef',
            'binaryOp' => '\PhpParser\Node\Expr\BinaryOp',
            'binaryOp' => '\PhpParser\Node\Expr\BinaryOp',
            'bitwiseNot' => '\PhpParser\Node\Expr\BitwiseNot',
            'booleanNot' => '\PhpParser\Node\Expr\BooleanNot',
            'cast' => '\PhpParser\Node\Expr\Cast',
            'cast' => '\PhpParser\Node\Expr\Cast',
            'classConstFetch' => '\PhpParser\Node\Expr\ClassConstFetch',
            'clone' => '\PhpParser\Node\Expr\Clone_',
            'closure' => '\PhpParser\Node\Expr\Closure',
            'closureUse' => '\PhpParser\Node\Expr\ClosureUse',
            'constFetch' => '\PhpParser\Node\Expr\ConstFetch',
            'empty' => '\PhpParser\Node\Expr\Empty_',
            'error' => '\PhpParser\Node\Expr\Error',
            'errorSuppress' => '\PhpParser\Node\Expr\ErrorSuppress',
            'eval' => '\PhpParser\Node\Expr\Eval_',
            'exit' => '\PhpParser\Node\Expr\Exit_',
            'funcCall' => '\PhpParser\Node\Expr\FuncCall',
            'include' => '\PhpParser\Node\Expr\Include_',
            'instanceof' => '\PhpParser\Node\Expr\Instanceof_',
            'isset' => '\PhpParser\Node\Expr\Isset_',
            'list' => '\PhpParser\Node\Expr\List_',
            'methodCall' => '\PhpParser\Node\Expr\MethodCall',
            'new' => '\PhpParser\Node\Expr\New_',
            'postDec' => '\PhpParser\Node\Expr\PostDec',
            'postInc' => '\PhpParser\Node\Expr\PostInc',
            'preDec' => '\PhpParser\Node\Expr\PreDec',
            'preInc' => '\PhpParser\Node\Expr\PreInc',
            'print' => '\PhpParser\Node\Expr\Print_',
            'propertyFetch' => '\PhpParser\Node\Expr\PropertyFetch',
            'shellExec' => '\PhpParser\Node\Expr\ShellExec',
            'staticCall' => '\PhpParser\Node\Expr\StaticCall',
            'staticPropertyFetch' => '\PhpParser\Node\Expr\StaticPropertyFetch',
            'ternary' => '\PhpParser\Node\Expr\Ternary',
            'unaryMinus' => '\PhpParser\Node\Expr\UnaryMinus',
            'unaryPlus' => '\PhpParser\Node\Expr\UnaryPlus',
            'variable' => '\PhpParser\Node\Expr\Variable',
            'yieldFrom' => '\PhpParser\Node\Expr\YieldFrom',
            'yield' => '\PhpParser\Node\Expr\Yield_',
            'fullyQualified' => '\PhpParser\Node\Name\FullyQualified',
            'relative' => '\PhpParser\Node\Name\Relative',
            'dNumber' => '\PhpParser\Node\Scalar\DNumber',
            'encapsed' => '\PhpParser\Node\Scalar\Encapsed',
            'encapsedStringPart' => '\PhpParser\Node\Scalar\EncapsedStringPart',
            'lNumber' => '\PhpParser\Node\Scalar\LNumber',
            'magicConst' => '\PhpParser\Node\Scalar\MagicConst',
            'magicConst' => '\PhpParser\Node\Scalar\MagicConst',
            'string' => '\PhpParser\Node\Scalar\String_',
            'break' => '\PhpParser\Node\Stmt\Break_',
            'case' => '\PhpParser\Node\Stmt\Case_',
            'catch' => '\PhpParser\Node\Stmt\Catch_',
            'classConst' => '\PhpParser\Node\Stmt\ClassConst',
            'classLike' => '\PhpParser\Node\Stmt\ClassLike',
            'classMethod' => '\PhpParser\Node\Stmt\ClassMethod',
            'class' => '\PhpParser\Node\Stmt\Class_',
            'const' => '\PhpParser\Node\Stmt\Const_',
            'continue' => '\PhpParser\Node\Stmt\Continue_',
            'declareDeclare' => '\PhpParser\Node\Stmt\DeclareDeclare',
            'declare' => '\PhpParser\Node\Stmt\Declare_',
            'do' => '\PhpParser\Node\Stmt\Do_',
            'echo' => '\PhpParser\Node\Stmt\Echo_',
            'elseIf' => '\PhpParser\Node\Stmt\ElseIf_',
            'else' => '\PhpParser\Node\Stmt\Else_',
            'expression' => '\PhpParser\Node\Stmt\Expression',
            'finally' => '\PhpParser\Node\Stmt\Finally_',
            'for' => '\PhpParser\Node\Stmt\For_',
            'foreach' => '\PhpParser\Node\Stmt\Foreach_',
            'function' => '\PhpParser\Node\Stmt\Function_',
            'global' => '\PhpParser\Node\Stmt\Global_',
            'goto' => '\PhpParser\Node\Stmt\Goto_',
            'groupUse' => '\PhpParser\Node\Stmt\GroupUse',
            'haltCompiler' => '\PhpParser\Node\Stmt\HaltCompiler',
            'if' => '\PhpParser\Node\Stmt\If_',
            'inlineHTML' => '\PhpParser\Node\Stmt\InlineHTML',
            'interface' => '\PhpParser\Node\Stmt\Interface_',
            'label' => '\PhpParser\Node\Stmt\Label',
            'namespace' => '\PhpParser\Node\Stmt\Namespace_',
            'nop' => '\PhpParser\Node\Stmt\Nop',
            'property' => '\PhpParser\Node\Stmt\Property',
            'propertyProperty' => '\PhpParser\Node\Stmt\PropertyProperty',
            'return' => '\PhpParser\Node\Stmt\Return_',
            'staticVar' => '\PhpParser\Node\Stmt\StaticVar',
            'static' => '\PhpParser\Node\Stmt\Static_',
            'switch' => '\PhpParser\Node\Stmt\Switch_',
            'throw' => '\PhpParser\Node\Stmt\Throw_',
            'traitUse' => '\PhpParser\Node\Stmt\TraitUse',
            'traitUseAdaptation' => '\PhpParser\Node\Stmt\TraitUseAdaptation',
            'trait' => '\PhpParser\Node\Stmt\Trait_',
            'tryCatch' => '\PhpParser\Node\Stmt\TryCatch',
            'unset' => '\PhpParser\Node\Stmt\Unset_',
            'useUse' => '\PhpParser\Node\Stmt\UseUse',
            'use' => '\PhpParser\Node\Stmt\Use_',
            'while' => '\PhpParser\Node\Stmt\While_',
            
            // CAMELCASED WITH _ POSTFIX
            'array_' => '\PhpParser\Node\Expr\Array_',
            'clone_' => '\PhpParser\Node\Expr\Clone_',
            'empty_' => '\PhpParser\Node\Expr\Empty_',
            'eval_' => '\PhpParser\Node\Expr\Eval_',
            'exit_' => '\PhpParser\Node\Expr\Exit_',
            'include_' => '\PhpParser\Node\Expr\Include_',
            'instanceof_' => '\PhpParser\Node\Expr\Instanceof_',
            'isset_' => '\PhpParser\Node\Expr\Isset_',
            'list_' => '\PhpParser\Node\Expr\List_',
            'new_' => '\PhpParser\Node\Expr\New_',
            'print_' => '\PhpParser\Node\Expr\Print_',
            'yield_' => '\PhpParser\Node\Expr\Yield_',
            'string_' => '\PhpParser\Node\Scalar\String_',
            'break_' => '\PhpParser\Node\Stmt\Break_',
            'case_' => '\PhpParser\Node\Stmt\Case_',
            'catch_' => '\PhpParser\Node\Stmt\Catch_',
            'class_' => '\PhpParser\Node\Stmt\Class_',
            'const_' => '\PhpParser\Node\Stmt\Const_',
            'continue_' => '\PhpParser\Node\Stmt\Continue_',
            'declare_' => '\PhpParser\Node\Stmt\Declare_',
            'do_' => '\PhpParser\Node\Stmt\Do_',
            'echo_' => '\PhpParser\Node\Stmt\Echo_',
            'elseIf_' => '\PhpParser\Node\Stmt\ElseIf_',
            'else_' => '\PhpParser\Node\Stmt\Else_',
            'finally_' => '\PhpParser\Node\Stmt\Finally_',
            'for_' => '\PhpParser\Node\Stmt\For_',
            'foreach_' => '\PhpParser\Node\Stmt\Foreach_',
            'function_' => '\PhpParser\Node\Stmt\Function_',
            'global_' => '\PhpParser\Node\Stmt\Global_',
            'goto_' => '\PhpParser\Node\Stmt\Goto_',
            'if_' => '\PhpParser\Node\Stmt\If_',
            'interface_' => '\PhpParser\Node\Stmt\Interface_',
            'namespace_' => '\PhpParser\Node\Stmt\Namespace_',
            'return_' => '\PhpParser\Node\Stmt\Return_',
            'static_' => '\PhpParser\Node\Stmt\Static_',
            'switch_' => '\PhpParser\Node\Stmt\Switch_',
            'throw_' => '\PhpParser\Node\Stmt\Throw_',
            'trait_' => '\PhpParser\Node\Stmt\Trait_',
            'unset_' => '\PhpParser\Node\Stmt\Unset_',
            'use_' => '\PhpParser\Node\Stmt\Use_',
            'while_' => '\PhpParser\Node\Stmt\While_',
            
            // SHORTCUTS AND CUSTOMIZATIONS
            'method' => '\PhpParser\Node\Stmt\ClassMethod',
        ];
        
        if(!$class) return $map;

        if(isset($map[$class])) return $map[$class];

        return null;
    }

    public function propertyMap($property)
    {
        // Collisions:
        // 0 => "method",
        // 58 => "class",
        // 66 => "else",
        // 68 => "finally",
        // 76 => "if",
        // 86 => "static",
        // 91 => "trait",
        
        // TEMPORARY FIX WITH NAMESPACING $1___
        // CONSIDER USING A MAGIC GETTER TO ALLOW SAME NAME AS METHOD?

        $map = [
            'expr' => 'expr',
            'attributes' => 'attributes',
            'type' => 'type',
            'name' => 'name',
            'alias' => 'alias',
            'vars' => 'vars',
            'stmts' => 'stmts',
            'traits' => 'traits',
            'adaptations' => 'adaptations',
            'insteadof' => 'insteadof',
            'trait___' => 'trait',
            'method___' => 'method',
            'newModifier' => 'newModifier',
            'newName' => 'newName',
            'types' => 'types',
            'var' => 'var',
            'flags' => 'flags',
            'extends' => 'extends',
            'implements' => 'implements',
            'default' => 'default',
            'cond' => 'cond',
            'num' => 'num',
            'byRef' => 'byRef',
            'params' => 'params',
            'returnType' => 'returnType',
            'magicNames' => 'magicNames',
            'remaining' => 'remaining',
            'key' => 'key',
            'value' => 'value',
            'catches' => 'catches',
            'finally___' => 'finally',
            'exprs' => 'exprs',
            'declares' => 'declares',
            'props' => 'props',
            'elseifs' => 'elseifs',
            'else___' => 'else',
            'consts' => 'consts',
            'cases' => 'cases',
            'keyVar' => 'keyVar',
            'valueVar' => 'valueVar',
            'init' => 'init',
            'loop' => 'loop',
            'prefix' => 'prefix',
            'use' => 'use',
            'specialClassNames' => 'specialClassNames',
            'variadic' => 'variadic',
            'left' => 'left',
            'right' => 'right',
            'items' => 'items',
            'parts' => 'parts',
            'class___' => 'class',
            'args' => 'args',
            'static___' => 'static',
            'dim' => 'dim',
            'if___' => 'if',
            'unpack' => 'unpack',
            'replacements' => 'replacements',            
        ];

        if(!$property) return $map;

        if(isset($map[$property])) return $map[$property];

        return null;        
    }
}