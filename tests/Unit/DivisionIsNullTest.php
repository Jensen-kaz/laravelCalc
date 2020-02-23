<?php

namespace Tests\Unit;

use App\Services\Expressions\DivisionExpression;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DivisionIsNullTest extends TestCase
{
    public function testMakeDivision()
    {
        $a = 0;
        $b = 2;
        $result = 0;
        $obj = new DivisionExpression();
        $resultDivision = $obj->executeExpression($a, $b);
        $this->assertEquals($result, $resultDivision);
    }
}
