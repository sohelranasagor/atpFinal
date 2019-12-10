<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.addJob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job();
        $job->cmpname = $request->cmpname;
        $job->jobTitle = $request->jobTitle;
        $job->jobLocation = $request->location;
        $job->salary = $request->salary;
        if($job->save())
        {
            return redirect()->route('employee.jobList');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('employee.jobDetails')->with('job', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('employee.editJob')->with('job', $job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->cmpname = $request->cmpname;
        $job->jobTitle = $request->jobTitle;
        $job->jobLocation = $request->location;
        $job->salary = $request->salary;
        if($job->save())
        {
            return redirect()->route('employee.jobList');
        }
    }

    public function delete($id)
    {
        $job = Job::find($id);
        return view('employee.deleteJob')->with('job', $job);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        if($job->delete())
        {
            return redirect()->route('employee.jobList');
        }
        else
        {
            return view('employee.deleteJob')->with('job', $job);
        }
    }

    public function JobList()
    {
        $jobs = Job::all();
        return view('employee.jobList')->with('jobs', $jobs);
    }
}
