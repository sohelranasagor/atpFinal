<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::group(['middleware'=>['sess']], function(){
    // ADMIN
	Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/employeeList', 'EmployeeController@employeeList')->name('admin.employeeList');
    Route::get('/admin/addEmployee', 'EmployeeController@create')->name('admin.create');
    Route::post('/admin/addEmployee', 'EmployeeController@store')->name('admin.store');
	Route::get('/admin/employee/details/{id}', 'EmployeeController@show')->name('admin.Empdetails');
    Route::get('/admin/employee/edit/{id}', 'EmployeeController@edit')->name('admin.edit');
    Route::post('/admin/employee/edit/{id}', 'EmployeeController@update')->name('admin.update');
    Route::get('/admin/employee/delete/{id}', 'EmployeeController@delete')->name('admin.delete');
    Route::post('/admin/employee/delete/{id}', 'EmployeeController@destroy')->name('admin.destroy');

    // Employee
    Route::get('/employee', 'EmployeeController@index')->name('employee.index');
    Route::get('/employee/addJob', 'JobController@create')->name('employee.create');
    Route::post('/employee/addJob', 'JobController@store')->name('employee.store');
    Route::get('/employee/jobList', 'JobController@jobList')->name('employee.jobList');
    Route::get('/employee/job/details/{id}', 'JobController@show')->name('employee.jobdetails');
    Route::get('/employee/job/edit/{id}', 'JobController@edit')->name('employee.edit');
    Route::post('/employee/job/edit/{id}', 'JobController@update')->name('employee.update');
    Route::get('/employee/job/delete/{id}', 'JobController@delete')->name('employee.delete');
    Route::post('/employee/job/delete/{id}', 'JobController@destroy')->name('employee.destroy');
});