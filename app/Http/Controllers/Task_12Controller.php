<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Task_12Controller extends Controller
{
    //
    public function index(){
        return view("task_12", [
            'backend_url' => 'task_12.store'
        ]);
    }

    public function store(Request $request){

        $validate = Validator::make($request->all(), [
            'libras' => 'required|numeric'
        ]);

        if($validate->fails()){
            return view('task_12', [
                'reload' => 'task_12.index',
                'message' => 'Los datos no fueron ingresados correctamente',
                'alert_type' => 'alert-danger',
            ]);
        }

        $response =$request->libras * 2.2046;
        $response = number_format( $response,4);


        return view('task_12', [
            'reload' => 'task_12.index',
            'message' => 'Los datos son correctos',
            'alert_type' => 'alert-success',
            // task
            'response' => "El resultado es de: $response  Kg.",
        ]);

    }
}
