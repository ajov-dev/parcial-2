<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class Task_07Controller extends Controller
{
    //
    public function index()
    {
        return view('task_07', [
            'backend_url' => 'task_07.store',
        ]);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'presupuesto' => 'required|numeric|min:1',
        ]);

        if ($validate->fails()) {
            return view("Task_07", [
                // default
                'reload' => 'task_07.index',
                'alert_type' => 'alert-danger',
                'message' => 'Los datos fueron ingresados incorrectamente',
            ]);
        }

        $presupuesto = $request->input('presupuesto');
        $ginecologia = $presupuesto * 0.40;
        $traumatologia = $presupuesto * 0.30;
        $pediatria = $presupuesto * 0.30;


        return view(
            'task_07',
            [
                // default
                'reload' => 'task_07.index',
                'alert_type' => 'alert-success',
                'message' => 'Los datos fueron ingresados correctamente',
                // task
                'response' => $presupuesto,
                'ginecologia' => $ginecologia,
                'traumatologia' => $traumatologia,
                'pediatria' => $pediatria,
            ],
        );
    }
}
