<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerPage()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // $dados = $request->all();
        // $dados['senha'] = Hash::make($request->senha);
        // User::create($dados);

        $request->validate([
            'name' => 'required|unique:users',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);

        // Auth::attempt($request->except("_token"));
        // $request->session()->regenerate();

        // return redirect()->route('homePage');

        $dados = new LoginController;
        $dados->login($request);
    }
}
