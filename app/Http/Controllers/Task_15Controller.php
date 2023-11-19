<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_15Controller extends Controller
{
    //
    public function index()
    {
        return view("task_15", [
            'backend_url' => 'task_15.store'
        ]);
    }


    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'rol' => 'required|in:tipo1,tipo2,tipo3,tipo4',
            // Se requiere que se seleccione un rol válido
        ]);

        if ($validate->fails()) {
            return view('task_15', [
                'reload' => 'task_15.index',
                'message' => 'Los datos no fueron ingresados correctamente',
                'alert_type' => 'alert-danger',
            ]);
        }

        $task = $request['rol'];
        $response = 0;
        switch ($task) {
            case 'tipo1':
                $response = 25;
                break;
            case 'tipo2':
                $response = 35;
                break;
            case 'tipo3':
                $response = 40;
                break;
            default:
                $response = 50;
                break;
        }

        return view('task_15', [
            'reload' => 'task_15.index',
            'message' => 'Los datos son correctos',
            'alert_type' => 'alert-success',
            // task
            'response' => "Excelente señor, su credito con nuestro banco ahora es de $response% mas de lo que tenia antes",
        ]);

    }
}
