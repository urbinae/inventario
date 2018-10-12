<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the view lotes.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewlotes()
    {
        return view('lotes.index');
    }
}
