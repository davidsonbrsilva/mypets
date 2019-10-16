<?php

namespace App\Http\Controllers;

use App\AnimalType;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AnimalTypeController extends Controller
{
    public function index()
    {
        return AnimalType::all();
    }

    public function store(Request $request)
    {
        $animalType = new AnimalType();
        $animalType->fill($request->all());
        $animalType->save();

        return response()->json($animalType, 201);
    }

    public function show($id)
    {
        $animalType = AnimalType::with('animal')->find($id);

        if(!$animalType) {
            throw new ModelNotFoundException('Animal type not found');
        }

        return $animalType;
    }

    public function update(Request $request, $id)
    {
        $animalType = AnimalType::find($id);

        if(!$animalType) {
            throw new ModelNotFoundException('Animal type not found');
        }

        $animalType->fill($request->all());
        $animalType->save();

        return response()->json($animalType);
    }

    public function destroy($id)
    {
        $animalType = AnimalType::find($id);

        if(!$animalType) {
            throw new ModelNotFoundException('Animal type not found');
        }

        $animalType->delete();
    }
}
