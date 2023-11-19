<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_04Controller extends Controller
{
    public function index()
    {
        return view('task_04', [
            'backend_url' => 'task_04.store',
        ]);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'hora_pago' => 'required|numeric',
            'hora_trabajo' => 'required|numeric|max:215',
        ]);
        if ($validate->fails()) {
            return view("Task_04", [
                // default
                'reload' => 'task_04.index',
                'alert_type' => 'alert-danger',
                'message' => 'Los datos ingresados incorrectamente',
            ]);
        }
        $descuento = 0.20;
        $hora_pago = (float) $request['hora_pago'];
        $hora_trabajo = (float) $request['hora_trabajo'];
        $salarioBruto = ($hora_pago * $hora_trabajo);
        $descuento = ($salarioBruto * $descuento);
        $salarioNeto = ($salarioBruto - $descuento);
        // retorna una vista de tabla
        return view("Task_04", [
            // default
            'reload' => 'task_04.index',
            'message' => 'Los datos se ingresaron correctamente',
            'alert_type' => 'alert-success',
            // segundos
            'hora_pago' => (number_format($hora_pago, 2)),
            'hora_trabajo' => (number_format($hora_trabajo, 2)),
            'salario_bruto' => (number_format($salarioBruto, 2)),
            'descuento' => (number_format($descuento, 2)),
            'response' => (number_format($salarioNeto, 2)),
        ]);
    }
}
