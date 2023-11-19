<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_11Controller extends Controller
{
    //
    public function index()
    {
        return view("task_11", [
            'backend_url' => 'task_11.store'
        ]);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'input_cm' => 'numeric|required',
        ]);

        if ($validate->fails()) {
            return view('task_11', [
                'reload' => 'task_11.index',
                'message' => 'Los datos no son correctos',
                'alert_type' => 'alert-danger',
            ]);
        }

        $response = $request->input_cm * 0.393701;
        return view('task_11', [
            'reload' => 'task_11.index',
            'message' => 'Los datos son correctos',
            'alert_type' => 'alert-success',
            // task
            'response' => $response,

        ]);
    }
}
