<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_10Controller extends Controller
{
    //
    public function index()
    {
        return view('task_10', [
            'backend_url' => 'task_10.store',
        ]);
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            // default
            'time_s' => 'required|numeric|min:0|integer',
            'time_m' => 'required|numeric|min:0|integer',
            'time_h' => 'required|numeric|min:0|integer',
        ]);

        if ($validate->fails()) {
            return view('task_10', [
                // default
                'reload' => 'task_10.index',
                'alert_type' => 'alert-danger',
                'message' => 'Los datos ingresados no son válidos',
            ]);
        }


        $horas_resueltas = $request['time_h'] * 60 * 60;
        $minutos_resueltos = $request['time_m'] * 60;
        $segundos_resueltos = $request['time_s'];

        $segundos_totales = $horas_resueltas + $minutos_resueltos + $segundos_resueltos;
        $response = $segundos_totales * 0.25;

        return view('task_10', [
            // default
            'reload' => 'task_10.index',
            'alert_type' => 'alert-success',
            'message' => 'Los datos ingresados son válidos',
            // task
            'response' => 'El tiempo ingresado es de ' . $segundos_totales . ' segundos',
            'costo_total' => '$ ' . number_format($response, 2, ',', '.')
        ])->withErrors($validate);
    }
}
