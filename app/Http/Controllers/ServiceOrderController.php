<?php

namespace App\Http\Controllers;

use App\ServiceOrder;
use Illuminate\Http\Request;

class ServiceOrderController extends Controller
{
    public function index()
    {
        return ServiceOrder::all();
    }

    public function store(Request $request)
    {
        $serviceOrder = new ServiceOrder();
        $serviceOrder->fill($request->all());
        $serviceOrder->save();

        return response()->json($serviceOrder, 201);
    }

    public function show($id)
    {
        $serviceOrder = ServiceOrder::find($id);

        if(!$serviceOrder) {
            throw new ModelNotFoundException('Service order not found');
        }

        return $serviceOrder;
    }

    public function update(Request $request, $id)
    {
        $serviceOrder = ServiceOrder::find($id);

        if(!$serviceOrder) {
            throw new ModelNotFoundException('Service order not found');
        }

        $serviceOrder->fill($request->all());
        $serviceOrder->save();

        return response()->json($serviceOrder);
    }

    public function destroy($id)
    {
        $serviceOrder = ServiceOrder::find($id);

        if(!$serviceOrder) {
            throw new ModelNotFoundException('Service order not found');
        }

        $serviceOrder->delete();
    }
}
