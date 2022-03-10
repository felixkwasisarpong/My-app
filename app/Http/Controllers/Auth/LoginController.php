<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if (!Auth::attempt($data))
        {
            return back()->with('error', 'Invalid username or password')->withInput($request->all());
        }

        return redirect()->route('home');
    }

    public function showLoginView(): View
    {
        return view('login');

    }
}
