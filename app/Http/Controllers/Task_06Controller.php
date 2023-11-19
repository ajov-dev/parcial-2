<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_06Controller extends Controller
{
    //
    public function index()
    {
        return view('task_06', [
            'backend_url' => 'task_06.store',
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
            'examen_final' => 'required|numeric|max:100',
            'proyecto_final' => 'required|numeric|max:100',
        ]);
        if ($validate->fails()) {
            return view("Task_06", [
                // default
                'reload' => 'task_06.index',
                'alert_type' => 'alert-danger',
                'message' => 'Los datos fueron ingresados incorrectamente',
            ]);
        }

        $nombre_materia = $request->input('nombre_materia');
        $nombre_estudiante = $request->input('nombre_estudiante');
        $nota_01 = $request->input('nota_01');
        $nota_02 = $request->input('nota_02');
        $nota_03 = $request->input('nota_03');
        $examen_final = $request->input('examen_final');
        $proyecto_final = $request->input('proyecto_final');

        $materia_promedio = (($nota_01 + $nota_02 + $nota_03) / 3);
        $materia_promedio = $materia_promedio * 0.55;
        $examen_final = $examen_final * 0.30;
        $proyecto_final = $proyecto_final * 0.15;
        $promedio_final = $materia_promedio + $examen_final + $proyecto_final;

        return view('task_06', [
            // default
            'reload' => 'task_06.index',
            'alert_type' => 'alert-success',
            'message' => 'Los datos fueron ingresados correctamente',
            // task
            'nombre_materia' => $nombre_materia,
            'nombre_estudiante' => $nombre_estudiante,
            'nota_01' => number_format($nota_01, 2, '.', ''),
            'nota_02' => number_format($nota_02, 2, '.', ''),
            'nota_03' => number_format($nota_03, 2, '.', ''),
            'materia_promedio' => number_format($materia_promedio, 2, '.', ''),
            'examen_final' => number_format($examen_final, 2, '.', ''),
            'proyecto_final' => number_format($proyecto_final, 2, '.', ''),
            'response' => number_format($promedio_final, 2, '.', ''),
        ]);


    }
}
