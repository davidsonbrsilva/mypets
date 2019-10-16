<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return Animal::with('type', 'bleed', 'owners')->get();
    }

    public function store(Request $request)
    {
        $animal = new Animal();
        $animal->fill($request->all());
        $animal->save();

        return response()->json($animal, 201);
    }

    public function show($username)
    {
        $animal = Animal::with('type', 'bleed')->where('username', '=', $username)->firstOrFail();

        if(!$animal) {
            throw new ModelNotFoundException('Animal not found');
        }

        return $animal;
    }

    public function showOwners($username)
    {
        $animal = Animal::with('type', 'bleed', 'owners')->where('username', '=', $username)->firstOrFail();

        if(!$animal) {
            throw new ModelNotFoundException('Animal not found');
        }

        return $animal;
    }

    public function showOrders($username)
    {
        $animal = Animal::with('type', 'bleed','orders')->where('username', '=', $username)->firstOrFail();

        if(!$animal) {
            throw new ModelNotFoundException('Animal not found');
        }

        return $animal;
    }

    public function update(Request $request, $username)
    {
        $animal = Animal::where('username', '=', $username)->firstOrFail();

        if(!$animal) {
            throw new ModelNotFoundException('Animal not found');
        }

        $animal->fill($request->all());
        $animal->save();

        return response()->json($animal);
    }

    public function destroy($username)
    {
        $animal = Animal::where('username', '=', $username)->firstOrFail();

        if(!$animal) {
            throw new ModelNotFoundException('Animal not found');
        }

        $animal->delete();
    }
}
