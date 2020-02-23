<?php

namespace Tests\Unit;

use App\Services\Expressions\DivisionExpression;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DivisionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testMakeDivision()
    {
        $a = 6;
        $b = 2;
        $result = 3;
        $obj = new DivisionExpression();
        $resultDivision = $obj->executeExpression($a, $b);
        $this->assertEquals($result, $resultDivision);
    }
}
