<?php


namespace App\Services\Expressions;

use App\Services\Expressions\StrategyExpressions;

class PlusExpression implements StrategyExpressions
{
    public function executeExpression($a, $b) {

        $result = $a + $b;
        return $result;
    }
}
