<?php

namespace App\Http\Controllers\Auth;

use App\FileUploader\ImageUploader;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Utils\AppUtils;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function registers(RegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        $data = AppUtils::uploadImage($data, ImageUploader::class);

        $user = User::create($data);

        Auth::login($user);

        return response()->json(auth()->user()); // @todo return view if the need be
    }
}
