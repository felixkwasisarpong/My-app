<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        if (!Auth::attempt($data)) // @todo return a view if the need be
        {
            return response()->json(['message' => 'invalid email or password'], Response::HTTP_UNAUTHORIZED);
        }

        $user = auth()->user();

        return response()->json($user); // @todo return a view if the need be
    }
}
