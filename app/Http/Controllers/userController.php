<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index()
    {
        return view('admin.accesControl.register');
    }
    public  function login()
    {
        return view('admin.accesControl.login');
    }
    public  function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);

        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password); // Se encripta la contraseña usando la función bcrypt().
        $newUser->save(); // Se guarda el registro en la base de datos.
        return redirect()->route('login')
            ->with('success', 'User created successfully.');
    }
    public function validateLogin(Request $request)

    {
        $credencial = $request->only('email', 'password');
        if (Auth::attempt($credencial)) {
            $request->session() ->regenerate();
            return redirect()->route('dasboard.inicio');
        } else {
            return redirect()->route('login')
                ->with('error', 'usuario o contraseña incorrectos');
        }
        //  $user =   User::where('email', $request->email)->get();
        //     $pass= $user->password;

        //     return $user->toArray();
    }
    public function logout()
    {
        //logout user
        Auth::logout();
        // redirect to homepage
        return  redirect()->route('home.app');
    }

}
