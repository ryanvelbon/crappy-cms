<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Service;

class PageController extends Controller
{
	public function home()
	{
		$services = Service::all();
		return view('pages.home', ['services' => $services]);
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
