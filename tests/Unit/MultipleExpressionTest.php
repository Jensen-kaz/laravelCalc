<?php

namespace Tests\Unit;

use App\Services\Expressions\MultipleExpression;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MultipleExpressionTest extends TestCase
{
    public function testMakeDivision()
    {
        $a = 6;
        $b = 2;
        $result = 12;
        $obj = new MultipleExpression();
        $resultDivision = $obj->executeExpression($a, $b);
        $this->assertEquals($result, $resultDivision);
    }
}
