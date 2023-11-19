<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_03Controller extends Controller
{
    //
    public function index()
    {
        return view('task_03', [
            'backend_url' => 'task_03.store',
        ]);
    }

    public function store(Request $request)
    {
        // calcula el area de un circulo

        $validate = Validator::make($request->all(), [
            'radio' => 'required|numeric',
        ]);
        if (!$validate) {
            return view('task_03', [
                'reload' => 'task_03.index',
                'alert_type' => 'alert-danger',
                'message' => 'Los datos ingresados incorrectamente',
            ]);
        } else {
            $radio = $request->input('radio');
            $area = 3.1416 * $radio * $radio;
            return view('task_03', [
                'reload' => 'task_03.index',
                'message' => 'Los datos se ingresaron correctamente',
                'alert_type' => 'alert-success',
                'response' => 'El area del circulo es: ' . $area,
            ]);
        }
    }
}
