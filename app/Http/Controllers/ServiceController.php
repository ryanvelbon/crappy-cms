<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ServiceController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $service = new Service();

        $service->title = $request['title'];
        $service->slug = $request['slug'];
        $service->icon = $request['icon'];
        $service->description_short = $request['short-desc'];
        $service->description_long = $request['long-desc'];

        if($request->has('available')){
            $service->available = 1;
        }else{
            $service->available = 0;
        }

        $service->save();

        return Redirect::back()->with('msg', 'Success! Service added to database.');

    }

    public function show(Service $service)
    {
        // $service = Service::where('slug');
        return view('services.show', ['service' => $service]);
    }

    public function edit(Service $service)
    {
        //
    }

    public function update(Request $request, Service $service)
    {
        //
    }

    public function destroy(Service $service)
    {
        //
    }
}
