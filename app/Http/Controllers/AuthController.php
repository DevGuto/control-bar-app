<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = $request->input('name');
        $password = $request->input('password');

        // Verificar se o usuário existe no banco de dados
        $user = User::where('name', $login)->first();

        if(is_null($user)){
            return redirect()->route('login')->with('error', 'Usuário não existe!');
        }

        if($password != $user->getAttributes()['password']){
            return redirect()->route('login')->with('error', 'Credenciais inválidas');
        }

        return redirect()->route('home');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
