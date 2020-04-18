<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller 
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // here
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        return view('jobs');
    }

    public function show() {
        return view('job-single');
    }

}