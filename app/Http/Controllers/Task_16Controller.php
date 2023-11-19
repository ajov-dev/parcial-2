<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_16Controller extends Controller
{
    //
    public function index()
    {
        return view("task_16", [
            'backend_url' => 'task_16.store'
        ]);
    }


    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'steps' => 'required|integer|min:1|max:50',
            // Se requiere que se seleccione un rol válido
        ]);

        if ($validate->fails()) {
            return view('task_16', [
                'reload' => 'task_16.index',
                'message' => 'Los datos no fueron ingresados correctamente',
                'alert_type' => 'alert-danger',
            ]);
        }

        $task = $request['steps'];
        $steps = 0;
        $response = "";
        // genera un arbol de * segun el numero de pasos
        $arbol = [];

        for ($i = 1; $i <= $task; $i++) {
            $arbol[] = str_repeat('*', $i);
        }

        return view('task_16', [
            'reload' => 'task_16.index',
            'message' => 'Los datos son correctos',
            'alert_type' => 'alert-success',
            // task
            'response' => $arbol,
        ]);

    }
}
