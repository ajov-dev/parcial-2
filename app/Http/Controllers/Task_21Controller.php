<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task_21Controller extends Controller
{
    //
    public function index()
    {
        // genera 10 valores random entre 1 y 100
        $array = array();
        for ($i = 0; $i < 10; $i++) {
            $array[$i]['id'] = $i+1;
            $array[$i]['element'] = rand(50, 100);
            if ($array[$i]['element'] < 61) {
                $array[$i]['progress-color'] = 'bg-secondary';
            } elseif ($array[$i]['element'] >= 61 && $array[$i]['element'] < 71) {
                $array[$i]['progress-color'] = 'bg-danger';
            } elseif ($array[$i]['element'] >= 71 && $array[$i]['element'] < 81) {
                $array[$i]['progress-color'] = 'bg-warning';
            } elseif ($array[$i]['element'] >= 81 && $array[$i]['element'] < 91) {
                $array[$i]['progress-color'] = 'bg-info';
            } elseif ($array[$i]['element'] >= 91 && $array[$i]['element'] <= 100) {
                $array[$i]['progress-color'] = 'bg-success';
            }
        }
        return view('task_21', ['response' => $array]);
    }
}
