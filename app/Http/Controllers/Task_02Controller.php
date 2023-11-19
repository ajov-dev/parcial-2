<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_02Controller extends Controller
{
    //
    //
    public function index(Request $request)
    {
        return view('task_02', [
            'backend_url' => 'task_02.store',
        ]);
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
        ]);
        if (!$validate) {
            return view('task_02', [
                'reload' => 'task_02.index',
                'alert_type' => 'alert-danger',
                'message' => 'Los datos ingresados incorrectamente',
            ]);
        } else {
            $num1 = $request->input('num1');
            $num2 = $request->input('num2');
            $suma = $num1 + $num2;
            return view('task_02', [
                'reload' => 'task_02.index',
                'message' => 'Los datos se ingresaron correctamente',
                'alert_type' => 'alert-success',
                'response' => 'La suma de los numeros es: ' . $suma,
            ]);
        }
    }
}
