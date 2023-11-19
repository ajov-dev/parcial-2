<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task_20Controller extends Controller
{
    //
    public function index()
    {
        // genera 10 valores random entre 1 y 100
        $array = array();
        for ($i = 0; $i < 10; $i++) {
            $array[$i]['id'] = $i+1;
            $array[$i]['element'] = rand(1, 100);
        }
        return view('task_20', ['response' => $array]);
    }
}
