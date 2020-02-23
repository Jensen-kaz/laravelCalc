<?php


namespace App\Services\Expressions;

use App\Services\Expressions\StrategyExpressions;

class MinusExpression implements StrategyExpressions
{
    public function executeExpression($a, $b) {

        $result = $a - $b;
        return $result;
    }
}
