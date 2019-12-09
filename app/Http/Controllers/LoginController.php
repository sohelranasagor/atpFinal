<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user;

class LoginController extends Controller
{
    public function index(){

		return view('login.index');
	}

	public function verify(Request $req){

		

		$user = user::where('username', $req->username)
					->where('password', $req->password)
                    ->first();
        $req->session()->put('user', $user);
        if($user)
        {
            if($user->type ='admin')
            {
                return redirect()->route('admin.index');
            }
        }
	}
}
