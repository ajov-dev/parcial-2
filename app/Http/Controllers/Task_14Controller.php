<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_14Controller extends Controller
{
    //
    public function index()
    {
        return view("task_14", [
            'backend_url' => 'task_14.store'
        ]);
    }


    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'time_empresa' => 'required|numeric|min:1'
        ]);

        if ($validate->fails()) {
            return view('task_14', [
                'reload' => 'task_14.index',
                'message' => 'Los datos no fueron ingresados correctamente',
                'alert_type' => 'alert-danger',
            ]);
        }

        $task = $request['time_empresa'];
        $response = 0;
        switch ($task) {
            case 1:
                $response = 100;
                break;
            case 2:
                $response = 200;
                break;
            case 3:
                $response = 300;
                break;
            case 4:
                $response = 400;
                break;
            default:
                $response = 1000;
                break;
        }
        return view('task_14', [
            'reload' => 'task_14.index',
            'message' => 'Los datos son correctos',
            'alert_type' => 'alert-success',
            // task
            'response' => "Bien, debido a que tienes: $task años en la empresa, tu bono seria de: " . number_format($response, 2) . " $.",
        ]);

    }
}
