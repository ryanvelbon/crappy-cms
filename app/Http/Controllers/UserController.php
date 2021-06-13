<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\Service;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function login()
	{
		return view('login');
	}

	public function postLogin(Request $request)
	{
		if(Auth::attempt(['name' => $request['name'], 
						'password' => $request['password']])){
			return redirect()->route('admin.dashboard');
		}
		return redirect()->back()->withError("Incorrect login credentials.");
	}

	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect()->route('login');
	}

	public function dashboard()
	{
		$services = Service::all();
		return view('dashboard', ['services' => $services]);
	}

	// public function dashboard($msgs = [])
	// {

	// }
}
