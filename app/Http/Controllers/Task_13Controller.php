<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_13Controller extends Controller
{
    //
    public function index()
    {
        return view("task_13", [
            'backend_url' => 'task_13.store'
        ]);
    }


    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'cant_personas' => 'required|numeric|min:1'
        ]);

        if ($validate->fails()) {
            return view('task_13', [
                'reload' => 'task_13.index',
                'message' => 'Los datos no fueron ingresados correctamente',
                'alert_type' => 'alert-danger',
            ]);
        }

        $task = $request['cant_personas'];
        $response = 0;
        if ($task <= 200) {
            $response = 95;
        } elseif ($task > 200 && $task <= 300) {
            $response = 85;
        } elseif ($task > 300) {
            $response = 75;
        }

        return view('task_13', [
            'reload' => 'task_13.index',
            'message' => 'Los datos son correctos',
            'alert_type' => 'alert-success',
            // task
            'response' => "Excelente! el precio por cada platillo seria de: " . number_format($response, 2) . " $, y el precio final seria de aproximadamente: " . number_format($response * $task, 2) . " $.",
        ]);

    }
}
