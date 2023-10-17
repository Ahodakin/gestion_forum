<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function signup()
    {
        return view('home.auth.signup');
    }

    public function login()
    {
        return view('home.auth.login');
    }




    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'nom' => ['required', 'min:3', 'max:10'],
            'prenom' => ['required','min:5','max:15'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required','min:6', 'max:10', 'confirmed'],
        ]);

        $incomingFields['password'] = Hash::make($incomingFields['password']);
        $user = User::create($incomingFields);
        Auth()->login($user);
        return redirect('login');
    }

    public function loginpost(Request $request)
    {
        $incomingFields = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required',
        ]);

            if(auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])){
                $request->session()->regenerate();
                $userId = Auth::id();

                return redirect('liste');
            }else{
                return back()->with('error', 'Email ou mot de passe incorrect');
            }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}