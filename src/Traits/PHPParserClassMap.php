<?php

namespace Archetype\Traits;

trait PHPParserClassMap
{
	// Why this is a evil method:
	// It has a strange name
	// It does many things
	// It has a huge array inside of it
	// It does not throw an error when class is missing
    public function shortNodeNameMap(string $class = null)
    {
        $map = [
            'array' => \PhpParser\Node\Expr\Array_::class,
            'arrayDimFetch' => \PhpParser\Node\Expr\ArrayDimFetch::class,
            'arrayItem' => \PhpParser\Node\Expr\ArrayItem::class,
            'arrowFunction' => \PhpParser\Node\Expr\ArrowFunction::class,
            'assign' => \PhpParser\Node\Expr\Assign::class,
            'assignOp' => \PhpParser\Node\Expr\AssignOp::class,
            'assignOp' => \PhpParser\Node\Expr\AssignOp::class,
            'assignRef' => \PhpParser\Node\Expr\AssignRef::class,
            'binaryOp' => \PhpParser\Node\Expr\BinaryOp::class,
            'binaryOp' => \PhpParser\Node\Expr\BinaryOp::class,
            'bitwiseNot' => \PhpParser\Node\Expr\BitwiseNot::class,
            'booleanNot' => \PhpParser\Node\Expr\BooleanNot::class,
            'break' => \PhpParser\Node\Stmt\Break_::class,
            'case' => \PhpParser\Node\Stmt\Case_::class,
            'cast' => \PhpParser\Node\Expr\Cast::class,
            'cast' => \PhpParser\Node\Expr\Cast::class,
            'catch' => \PhpParser\Node\Stmt\Catch_::class,
            'class' => \PhpParser\Node\Stmt\Class_::class,
            'classConst' => \PhpParser\Node\Stmt\ClassConst::class,
            'classConstFetch' => \PhpParser\Node\Expr\ClassConstFetch::class,
            'classLike' => \PhpParser\Node\Stmt\ClassLike::class,
            'classMethod' => \PhpParser\Node\Stmt\ClassMethod::class,
            'clone' => \PhpParser\Node\Expr\Clone_::class,
            'closure' => \PhpParser\Node\Expr\Closure::class,
            'closureUse' => \PhpParser\Node\Expr\ClosureUse::class,
			'const' => \PhpParser\Node\Const_::class, // REVIEW
			'constStmt' => \PhpParser\Node\Stmt\Const_::class, // REVIEW
            'constFetch' => \PhpParser\Node\Expr\ConstFetch::class,
            'continue' => \PhpParser\Node\Stmt\Continue_::class,
            'declare' => \PhpParser\Node\Stmt\Declare_::class,
            'declareDeclare' => \PhpParser\Node\Stmt\DeclareDeclare::class,
            'dNumber' => \PhpParser\Node\Scalar\DNumber::class,
            'do' => \PhpParser\Node\Stmt\Do_::class,
            'echo' => \PhpParser\Node\Stmt\Echo_::class,
            'else' => \PhpParser\Node\Stmt\Else_::class,
            'elseIf' => \PhpParser\Node\Stmt\ElseIf_::class,
            'empty' => \PhpParser\Node\Expr\Empty_::class,
            'encapsed' => \PhpParser\Node\Scalar\Encapsed::class,
            'encapsedStringPart' => \PhpParser\Node\Scalar\EncapsedStringPart::class,
            'error' => \PhpParser\Node\Expr\Error::class,
            'errorSuppress' => \PhpParser\Node\Expr\ErrorSuppress::class,
            'eval' => \PhpParser\Node\Expr\Eval_::class,
            'exit' => \PhpParser\Node\Expr\Exit_::class,
            'expression' => \PhpParser\Node\Stmt\Expression::class,
            'finally' => \PhpParser\Node\Stmt\Finally_::class,
            'for' => \PhpParser\Node\Stmt\For_::class,
            'foreach' => \PhpParser\Node\Stmt\Foreach_::class,
            'fullyQualified' => \PhpParser\Node\Name\FullyQualified::class,
            'funcCall' => \PhpParser\Node\Expr\FuncCall::class,
            'function' => \PhpParser\Node\Stmt\Function_::class,
            'global' => \PhpParser\Node\Stmt\Global_::class,
            'goto' => \PhpParser\Node\Stmt\Goto_::class,
            'groupUse' => \PhpParser\Node\Stmt\GroupUse::class,
            'haltCompiler' => \PhpParser\Node\Stmt\HaltCompiler::class,
            'if' => \PhpParser\Node\Stmt\If_::class,
            'include' => \PhpParser\Node\Expr\Include_::class,
            'inlineHTML' => \PhpParser\Node\Stmt\InlineHTML::class,
            'instanceof' => \PhpParser\Node\Expr\Instanceof_::class,
            'interface' => \PhpParser\Node\Stmt\Interface_::class,
            'isset' => \PhpParser\Node\Expr\Isset_::class,
            'label' => \PhpParser\Node\Stmt\Label::class,
            'list' => \PhpParser\Node\Expr\List_::class,
            'lNumber' => \PhpParser\Node\Scalar\LNumber::class,
            'magicConst' => \PhpParser\Node\Scalar\MagicConst::class,
            'magicConst' => \PhpParser\Node\Scalar\MagicConst::class,
            'methodCall' => \PhpParser\Node\Expr\MethodCall::class,
            'name' => PhpParser\Node\Name::class,
            'namespace' => \PhpParser\Node\Stmt\Namespace_::class,
            'new' => \PhpParser\Node\Expr\New_::class,
            'nop' => \PhpParser\Node\Stmt\Nop::class,
            'postDec' => \PhpParser\Node\Expr\PostDec::class,
            'postInc' => \PhpParser\Node\Expr\PostInc::class,
            'preDec' => \PhpParser\Node\Expr\PreDec::class,
            'preInc' => \PhpParser\Node\Expr\PreInc::class,
            'print' => \PhpParser\Node\Expr\Print_::class,
            'property' => \PhpParser\Node\Stmt\Property::class,
            'propertyFetch' => \PhpParser\Node\Expr\PropertyFetch::class,
            'propertyProperty' => \PhpParser\Node\Stmt\PropertyProperty::class,
            'relative' => \PhpParser\Node\Name\Relative::class,
            'return' => \PhpParser\Node\Stmt\Return_::class,
            'shellExec' => \PhpParser\Node\Expr\ShellExec::class,
            'static' => \PhpParser\Node\Stmt\Static_::class,
            'staticCall' => \PhpParser\Node\Expr\StaticCall::class,
            'staticPropertyFetch' => \PhpParser\Node\Expr\StaticPropertyFetch::class,
            'staticVar' => \PhpParser\Node\Stmt\StaticVar::class,
            'string' => \PhpParser\Node\Scalar\String_::class,
            'switch' => \PhpParser\Node\Stmt\Switch_::class,
            'ternary' => \PhpParser\Node\Expr\Ternary::class,
            'throw' => \PhpParser\Node\Stmt\Throw_::class,
            'trait' => \PhpParser\Node\Stmt\Trait_::class,
            'traitUse' => \PhpParser\Node\Stmt\TraitUse::class,
            'traitUseAdaptation' => \PhpParser\Node\Stmt\TraitUseAdaptation::class,
            'tryCatch' => \PhpParser\Node\Stmt\TryCatch::class,
            'unaryMinus' => \PhpParser\Node\Expr\UnaryMinus::class,
            'unaryPlus' => \PhpParser\Node\Expr\UnaryPlus::class,
            'unset' => \PhpParser\Node\Stmt\Unset_::class,
            'use' => \PhpParser\Node\Stmt\Use_::class,
            'useUse' => \PhpParser\Node\Stmt\UseUse::class,
            'variable' => \PhpParser\Node\Expr\Variable::class,
            'while' => \PhpParser\Node\Stmt\While_::class,
            'yield' => \PhpParser\Node\Expr\Yield_::class,
            'yieldFrom' => \PhpParser\Node\Expr\YieldFrom::class,
        ];
        
        if (!$class) {
            return $map;
        }

        if (isset($map[$class])) {
            return $map[$class];
        }

        return null;
    }

    public function propertyMap(string $property = null)
    {
        $map = [
            'expr',
            'attributes',
            'type',
            'name',
            'alias',
            'vars',
            'stmts',
            'traits',
            'adaptations',
            'insteadof',
            'trait',
            'method',
            'newModifier',
            'newName',
            'types',
            'var',
            'flags',
            'extends',
            'implements',
            'default',
            'cond',
            'num',
            'byRef',
            'params',
            'returnType',
            'magicNames',
            'remaining',
            'key',
            'value',
            'catches',
            'finally',
            'exprs',
            'declares',
            'props',
            'elseifs',
            'else',
            'consts',
            'cases',
            'keyVar',
            'valueVar',
            'init',
            'loop',
            'prefix',
            'use',
            'uses',
            'specialClassNames',
            'variadic',
            'left',
            'right',
            'items',
            'parts',
            'class',
            'args',
            'static',
            'dim',
            'if',
            'unpack',
            'replacements',
        ];

        if (!$property) return $map;

        return in_array($property, $map) ? $property : null;
    }
}
