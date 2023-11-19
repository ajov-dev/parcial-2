<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Task_22Controller extends Controller
{
    //
    public function index()
    {
        return view('task_22', ['backend_url' => 'task_22.store']);
    }

    public function store(Request $request){
        $request->validate([
            'search'=> 'required|in:google,google_maps,youtube,yahoo,bing',
            'input_searched'=> 'required',
        ]);

        if ($request->search == 'google') {
            $redirect = ('https://www.google.com/search?q=');
        } elseif ($request->search == 'google_maps') {
            $redirect = ('https://www.google.es/maps/search/');
        } elseif ($request->search == 'youtube') {
            $redirect = ('https://www.youtube.com/results?search_query=');
        } elseif ($request->search == 'yahoo') {
            $redirect = ('https://espanol.search.yahoo.com/search?p=');
        } elseif ($request->search == 'bing') {
            $redirect = ('http://www.bing.com/search?q=');
        }

        return redirect($redirect.$request->input_searched);
    }
}
