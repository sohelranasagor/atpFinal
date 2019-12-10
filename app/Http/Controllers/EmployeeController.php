<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user=$request->session()->get('user');
        return view('employee.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::groupBy('cmpname')->get('cmpname');
        return view('admin.addEmployee')->with('jobs', $jobs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->empname;
        $user->cmpname = $request->cmpname;
        $user->cell = $request->phn;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = "employee";
        if($user->save())
        {
            return redirect()->route('admin.employeeList');
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
        $user = User::find($id);
        return view('admin.employeeDetails')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.editEmployee')->with('user', $user);
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
        $user = User::find($id);
        $user->name = $request->empname;
        $user->cmpname = $request->cmpname;
        $user->cell = $request->phn;
        $user->username = $request->username;
        if($user->save())
        {
            return redirect()->route('admin.employeeList');
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        return view('admin.deleteEmployee')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete())
        {
            return redirect()->route('admin.employeeList');
        }
        else
        {
            return view('admin.deleteEmployee')->with('user', $user);
        }
    }

    public function employeeList()
    {
        $users = User::where('type', 'employee')->get();
        return view('admin.employeeList')->with('users', $users);
    }
}
