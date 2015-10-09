<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{

    /**
     * Display a home of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('index.home');
    }

}
