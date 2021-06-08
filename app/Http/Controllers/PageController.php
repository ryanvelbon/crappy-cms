<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
	public function home()
	{
		return view('pages.home');
	}


	public function contact()
	{
		return view('pages.contact');
	}


	public function postContact(Request $request)
	{
		$validator = Validator::make($request->all(), [
			// pending
		]);

		if ($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		}
	}
}
