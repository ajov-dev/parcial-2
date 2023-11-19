<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_08Controller extends Controller
{
    //
    public function index()
    {
        return view('task_08', [
            'backend_url' => 'task_08.store',
        ]);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'cant_inversion_01' => 'required|numeric|min:50',
            'cant_inversion_02' => 'required|numeric|min:50',
            'cant_inversion_03' => 'required|numeric|min:50',
        ]);

        if ($validate->fails()) {
            return view('task_08', [
                'reload' => 'task_08.index',
                'alert_type' => 'alert-danger',
                'message' => 'Los datos ingresados incorrectamente',
            ]);
        }

        $suma = $request['cant_inversion_01'] + $request['cant_inversion_02'] + $request['cant_inversion_03'];
        $pi_01 = $request['cant_inversion_01'] / $suma * 100;
        $pi_02 = $request['cant_inversion_02'] / $suma * 100;
        $pi_03 = $request['cant_inversion_03'] / $suma * 100;

        return view('task_08', [
            // default
            'reload' => 'task_08.index',
            'alert_type' => 'alert-success',
            'message' => 'Los datos fueron ingresados correctamente',
            // task
            'pi_01' => number_format($pi_01, 2, '.', ''),
            'pi_02' => number_format($pi_02, 2, '.', ''),
            'pi_03' => number_format($pi_03, 2, '.', ''),
            'response' => number_format($suma, 2, '.', ''),
        ]);
    }
}
