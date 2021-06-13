<?php

namespace App\Http\Controllers;

use App\Models\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\QueryException;

class ServiceController extends Controller
{
    // This function contrains common functionality for storing and updating service records
    private function store_or_update($service, $request)
    {
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

        try {
            $service->save();
        }
        catch(QueryException $e){
            return Redirect::back()->withInput()
                                    ->withError($e->getMessage());
        }
    }

    public function index()
    {
        $services = Service::all();
        return view('services.index', ['services' => $services]);
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $service = new Service();

        $this->store_or_update($service, $request);

        return redirect()->route('admin.dashboard')->withSuccess("Service added to database.");
    }

    public function show($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('services.show', ['service' => $service]);
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        $this->store_or_update($service, $request);

        return redirect()->route('admin.dashboard')->withSuccess("Service has been updated.");

    }

    public function destroy($id)
    {
        Service::destroy($id);
    }
}
