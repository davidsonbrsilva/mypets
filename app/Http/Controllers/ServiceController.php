<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::all();
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->fill($request->all());
        $service->save();

        return response()->json($service, 201);
    }

    public function show($id)
    {
        $service = Service::find($id);

        if(!$service) {
            throw new ModelNotFoundException('Service not found');
        }

        return $service;
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        if(!$service) {
            throw new ModelNotFoundException('Service not found');
        }

        $service->fill($request->all());
        $service->save();

        return response()->json($service);
    }

    public function destroy($id)
    {
        $service = Service::find($id);

        if(!$service) {
            throw new ModelNotFoundException('Service not found');
        }

        $service->delete();
    }
}
