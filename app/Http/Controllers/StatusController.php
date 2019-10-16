<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return Status::all();
    }

    public function store(Request $request)
    {
        $status = new Status();
        $status->fill($request->all());
        $status->save();

        return response()->json($status, 201);
    }

    public function show($id)
    {
        $status = Status::find($id);

        if(!$status) {
            throw new ModelNotFoundException('Status not found');
        }

        return $status;
    }

    public function update(Request $request, $id)
    {
        $status = Status::find($id);

        if(!$status) {
            throw new ModelNotFoundException('Status not found');
        }

        $status->fill($request->all());
        $status->save();

        return response()->json($status);
    }

    public function destroy($id)
    {
        $status = Status::find($id);

        if(!$status) {
            throw new ModelNotFoundException('Status not found');
        }

        $status->delete();
    }
}
