<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::with('address')->get();
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return response()->json($user, 201);
    }

    public function show($username)
    {
        $user = User::with('address')->where('username', '=', $username)->firstOrFail();

        if(!$user) {
            throw new ModelNotFoundException('User not found');
        }

        return $user;
    }

    public function showAnimals($username)
    {
        $user = User::with('animals.type', 'animals.bleed')->where('username', '=', $username)->firstOrFail();

        if(!$user) {
            throw new ModelNotFoundException('User not found');
        }

        return $user;
    }

    public function showRequestedOrders($username)
    {
        $user = User::with('address','requestedOrders')->where('username', '=', $username)->firstOrFail();

        if(!$user) {
            throw new ModelNotFoundException('User not found');
        }

        return $user;
    }

    public function showAcceptedOrders($username)
    {
        $user = User::with('address','acceptedOrders')->where('username', '=', $username)->firstOrFail();

        if(!$user) {
            throw new ModelNotFoundException('User not found');
        }

        return $user;
    }

    public function update(Request $request, $username)
    {
        $user = User::where('username', '=', $username)->firstOrFail();

        if(!$user) {
            throw new ModelNotFoundException('Animal bleed not found');
        }

        $user->fill($request->all());
        $user->save();

        return response()->json($user);
    }

    public function destroy($username)
    {
        $user = User::where('username', '=', $username)->firstOrFail();

        if(!$user) {
            throw new ModelNotFoundException('Animal bleed not found');
        }

        $user->delete();
    }
}
