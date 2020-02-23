<?php


namespace App\Services\Expressions;

use App\Services\Expressions\StrategyExpressions;


class MultipleExpression implements StrategyExpressions
{
    public function executeExpression($a, $b) {

        $result = $a * $b;
        return $result;
    }
}
