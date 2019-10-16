<?php

namespace App\Http\Controllers;

use App\AnimalBleed;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AnimalBleedController extends Controller
{
    public function index()
    {
        return AnimalBleed::all();
    }

    public function store(Request $request)
    {
        $animalBleed = new AnimalBleed();
        $animalBleed->fill($request->all());
        $animalBleed->save();

        return response()->json($animalBleed, 201);
    }

    public function show($id)
    {
        $animalBleed = AnimalBleed::find($id);

        if(!$animalBleed) {
            throw new ModelNotFoundException('Animal bleed not found');
        }

        return $animalBleed;
    }

    public function update(Request $request, $id)
    {
        $animalBleed = AnimalBleed::find($id);

        if(!$animalBleed) {
            throw new ModelNotFoundException('Animal bleed not found');
        }

        $animalBleed->fill($request->all());
        $animalBleed->save();

        return response()->json($animalBleed);
    }

    public function destroy($id)
    {
        $animalBleed = AnimalBleed::find($id);

        if(!$animalBleed) {
            throw new ModelNotFoundException('Animal bleed not found');
        }

        $animalBleed->delete();
    }
}
