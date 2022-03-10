<?php

namespace App\Http\Controllers\Auth;

use App\FileUploader\ImageUploader;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Nationality;
use App\Models\User;
use App\Utils\AppUtils;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data = AppUtils::uploadImage($data, ImageUploader::class);

        $data['password'] = bcrypt($data['password']);
        $data['phone']=$data['phone_number'];
      
        $user = User::create($data);
       
        Auth::login($user);

        return redirect()->route('home');
    }

    public function showRegisterView(): View
    {
        $nationalities = Nationality::all();

        return view('register', compact('nationalities'));
    }
}
