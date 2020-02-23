<?php


namespace App\Services\Expressions;

class MathExpressions
{

    private static $expression;

    public static function setExpression(StrategyExpressions $mathExpr) {
        self::$expression = $mathExpr;
    }

    public static function getResult($a ,$b) {
        return self::$expression->executeExpression($a, $b);
    }
}
