<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator; 
use Auth;	
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    //
	public function getLogin(){
		return view("Login");
	}
	public function postLogin(Request $request){
		$rules = [
			'email' => 'required|email',
			'password' => 'required|min:8'
		];
		$validator = Validator::make($request->all(),$rules);
    	//dd($validator); 
		if ($validator->fails()){
    		//dd('xxx');
			return redirect()->back()->withErrors($validator)->withInput();
		}
		else{
			$email = $request->input('email');
			$password = $request->input('password');
			if (Auth::attempt(['email'=> $email, 'password' => $password])){
				//dd('Login successful!!!');
				return redirect()->intended('/');
			}
			else{
				$errors = new MessageBag(['errorLogin' => 'Incorrect email or password']);
				return redirect()->back()->withErrors($errors)->withInput();
			}

		}
	}
}
