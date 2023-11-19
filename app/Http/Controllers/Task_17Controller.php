<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_17Controller extends Controller
{
    //
    public function index()
    {
        // rellena una array desde 0 al 12
        $array = range(0, 12);
        return view("task_17", [
            'backend_url' => 'task_17.store',
            'table' => $array,
        ]);
    }


    public function store(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'numero' => 'required|min:0|max:50',
            // Se requiere que se seleccione un rol válido
        ]);

        if ($validate->fails()) {
            return view('task_17', [
                'reload' => 'task_17.index',
                'message' => 'Los datos no fueron ingresados correctamente',
                'alert_type' => 'alert-danger',
            ]);
        }

        return view('task_17', [
            'reload' => 'task_17.index',
            'message' => 'Los datos son correctos',
            'alert_type' => 'alert-success',
            // task
            'response' =>  range(0, 12),
            'id' => $request['numero'],
        ]);

    }
}
