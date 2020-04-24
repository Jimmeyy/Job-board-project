<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

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
        $jobs = Job::all();

        return view('jobs')->with('jobs', $jobs);
    }

    public function show($id) {

        // $job = Job::where('id', $id)->get();
        $job = Job::find($id);

        if (empty(json_decode($job, true))) {
            return redirect('jobs');
        }
        
        return view('job-single')->with('job', $job);
    }

}