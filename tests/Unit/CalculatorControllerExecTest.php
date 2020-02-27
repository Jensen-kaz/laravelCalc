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

    protected $request;

    protected function setUp()
    {
        parent::setUp();
        $this->request = new Request();
    }

    public function testPlus()
    {
        $this->request = new Request();
        $this->request->replace([
            'a' => 5,
            'b' => 2,
            'expression' => '+'
        ]);
        $expected = 7;

        $obj = new CalculatorController();
        $response = $obj->exec($this->request);

        $result = $response->getData()->result;
        $this->assertEquals($expected, $result);

        return $result;
    }

    /**
     * @depends testPlus
     */
    public function testMinus($result) {
        $this->request->replace([
            'a' => $result,
            'b' => 2,
            'expression' => '-'
        ]);
        $expected = 5;

        $obj = new CalculatorController();
        $response = $obj->exec( $this->request);

        $result = $response->getData()->result;
        $this->assertEquals($expected, $result);
    }

}
