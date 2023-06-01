<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;

class AuthController extends Controller
{
    public function login(LoginFormRequest $request)
    {
        $user_data = $request->all();

        if(auth()->attempt(['email' => $user_data['email'], 'password' => $user_data['password']]))
        {
            return redirect()->route('listProduct');
        }
        else{
            return redirect()->back()->withErrors(['Email'=> 'Email ou senha não conferem!']);
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
