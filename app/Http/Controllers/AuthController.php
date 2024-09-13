<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Debugging to check what data Postman sends
        dd($request->all()); // This will dump all the input data

        $request->validate([
            'name' => 'required|unique:users|max:255',
            'password' => 'required|min:6',
            'address' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'sim_number' => 'nullable|string',
        ]);

        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'sim_number' => $request->sim_number,
        ]);

        return response()->json(['message' => 'User registered successfully!'], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $user = Auth::user();

            return response()->json([
                'user_id' => $user->id,
                'message' => 'Login successful!',
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
