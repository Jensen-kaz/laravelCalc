<?php

namespace Tests\Unit;

use App\Services\Expressions\PlusExpression;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlusExpressionTest extends TestCase
{
    public function testMakeDivision()
    {
        $a = 6;
        $b = 2;
        $result = 8;
        $obj = new PlusExpression();
        $resultDivision = $obj->executeExpression($a, $b);
        $this->assertEquals($result, $resultDivision);
    }
}
