<?php

namespace Tests\Unit;

use App\Services\Expressions\MinusExpression;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MinusExpressionTest extends TestCase
{
    public function testMakeDivision()
    {
        $a = 6;
        $b = 2;
        $result = 4;
        $obj = new MinusExpression();
        $resultDivision = $obj->executeExpression($a, $b);
        $this->assertEquals($result, $resultDivision);
    }
}
