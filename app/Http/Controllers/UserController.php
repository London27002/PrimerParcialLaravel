<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function store(UserStoreRequest $request)
    {
        // Crea el nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Crea el token para el usuario
        $token = $user->createToken($request->name)->plainTextToken;

        // Devuelve la respuesta con el token
        return response()->json([
            'user' => $user,
            'token' => $token,
            'message' => 'User created successfully.',
            'status' => true,
        ], Response::HTTP_CREATED);
    }
}
