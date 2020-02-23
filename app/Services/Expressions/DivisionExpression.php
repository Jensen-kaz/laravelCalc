<?php


namespace App\Services\Expressions;


use App\Services\Expressions\StrategyExpressions;

class DivisionExpression implements StrategyExpressions
{
    public function executeExpression($a, $b) {

        if ($a == 0 || $b == 0) {
            return 0;
        }

        $result = $a / $b;
        return $result;
    }
}
