<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_09Controller extends Controller
{
    //
    public function index()
    {
        return view("task_09", [
            'backend_url' => 'task_09.store',
        ]);
    }

    public function store(request $request)
    {

        $validate = Validator::make($request->all(), [
            'cant_mujeres' => 'required|numeric|min:0',
            'cant_hombres' => 'required|numeric|min:0',
        ]);

        if ($validate->fails()) {
            // default
            return back()->withErrors($validate)->withInput();
        }

        $sumatoria = $request['cant_mujeres'] + $request['cant_hombres'];
        $porcentaje_mujeres = ($request['cant_mujeres'] / $sumatoria) * 100;
        $porcentaje_hombres = ($request['cant_hombres'] / $sumatoria) * 100;

        return view('task_09', [
            // default
            'reload' => 'task_09.index',
            'alert_type' => 'alert-success',
            'message' => 'Los datos fueron ingresados correctamente',
            // task
            'response' => $sumatoria,
            'porcentaje_mujeres' => number_format($porcentaje_mujeres, 2, '.', ''),
            'porcentaje_hombres' => number_format($porcentaje_hombres, 2, '.', ''),
        ]);
    }
}
