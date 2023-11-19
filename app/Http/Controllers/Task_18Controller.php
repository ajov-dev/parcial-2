<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task_18Controller extends Controller
{
    public function index()
    {
        // rellena un array del 1 al 100
        $task = range(1, 100);
        $obj = [];
        // recorre el array y y agregale un atributo id y un hash
        foreach ($task as $key => $value) {
            // $obj[$value]['id'] = $value;
            $obj[$value]['hash'] = hash('sha256', $value);
        }

        return view('task_18', [
            'backend_url' => 'task_18.store',
            'response' => $task,
            'obj' => $obj

        ]);
    }

    public function store(Request $request)
    {
        return view('task_18', [
            'reload' => 'task_18.index',
            'alert_type' => 'alert-success',
            'message' => 'El hash se generó correctamente',
            'response' => $request->input('hash')
        ]);
    }
}
