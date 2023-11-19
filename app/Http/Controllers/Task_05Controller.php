<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class Task_05Controller extends Controller
{
    //
    public function index()
    {
        return view('task_05', [
            'backend_url' => 'task_05.store',
        ]);
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nombre_materia' => 'required|string',
            'nombre_estudiante' => 'required|string',
            'nota_01' => 'required|numeric|max:100',
            'nota_02' => 'required|numeric|max:100',
            'nota_03' => 'required|numeric|max:100',
            'nota_04' => 'required|numeric|max:100',
            'nota_05' => 'required|numeric|max:100',
        ]);
        if ($validate->fails()) {
            return view("Task_05", [
                // default
                'reload' => 'task_05.index',
                'alert_type' => 'alert-danger',
                'message' => 'Los datos ingresados incorrectamente',
            ]);
        }

        $promedio = (((float) $request['nota_01'] + (float) $request['nota_02'] + (float) $request['nota_03'] + (float) $request['nota_04'] + (float) $request['nota_05']) / 500) * 100;
        $promedio = number_format($promedio, 2);
        return view("Task_05", [
            // default
            'reload' => 'task_05.index',
            'message' => 'Los datos se ingresaron correctamente',
            'alert_type' => 'alert-success',
            // segundos
            'nombre_materia' => $request['nombre_materia'],
            'nombre_estudiante' => $request['nombre_estudiante'],
            'nota_01' => number_format($request['nota_01'], 2),
            'nota_02' => number_format($request['nota_02'], 2),
            'nota_03' => number_format($request['nota_03'], 2),
            'nota_04' => number_format($request['nota_04'], 2),
            'nota_05' => number_format($request['nota_05'], 2),
            'response' => number_format($promedio, 2),
        ]);
    }
}
