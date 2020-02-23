<?php

namespace App\Http\Controllers;

use App\Services\Expressions\DivisionExpression;
use App\Services\Expressions\MathExpressions;
use App\Services\Expressions\MinusExpression;
use App\Services\Expressions\MultipleExpression;
use App\Services\Expressions\PlusExpression;
use Exception;
use Illuminate\Http\Request;
use App\Models\ActionLog;

class CalculatorController extends Controller
{
    public function index()
    {
        $values = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
        return view('calculator.index', ['values' => $values]);
    }

    public function exec(Request $request) {

        $params = $request->all();

        $a = (int)$params['a'];
        $b = (int)$params['b'];
        $expression = $params['expression'];
        $data = [];

        $arr = [
            '+' => $plusExpr = new PlusExpression(),
            '-' => $minusExpr = new MinusExpression(),
            '*' => $multipleExpr = new MultipleExpression(),
            '/' => $divisionExpr = new DivisionExpression(),
        ];

        foreach ($arr as $key => $value) {

            if ($key == $expression) {
                MathExpressions::setExpression($value);
                $data['result'] =  MathExpressions::getResult($a, $b);
            }
        }

        $log = new ActionLog();

        $log->setLog($params, $data['result']);

        return response()->json($data);

    }
}
