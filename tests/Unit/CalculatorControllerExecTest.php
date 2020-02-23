<?php

namespace Tests\Unit;

use App\Http\Controllers\CalculatorController;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Request;

class CalculatorControllerExecTest extends TestCase
{
    use DatabaseTransactions;

    public function testExec()
    {
        $request = new Request();
        $request->replace([
            'a' => 5,
            'b' => 2,
            'expression' => '+'
        ]);
        $expected = 7;

        $obj = new CalculatorController();
        $response = $obj->exec($request);

        $result = $response->getData()->result;
        $this->assertEquals($expected, $result);
    }
}
