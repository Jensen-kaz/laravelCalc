<?php

namespace Tests\Unit;

use App\Http\Controllers\CalculatorController;
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestException extends TestCase
{
    public function testThrowException() {
        $request = new Request();

        $obj = new CalculatorController();
        $response = $obj->exec($request);

        $this->expectException(\Exception::class);
    }
}
