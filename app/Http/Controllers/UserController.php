<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Components\Functions as F;

class UserController extends Controller
{
    /**
     *  Стартовая для админки
     */
    public function index()
    {
        // Если пользователь авторизирован то в админку иначе на авторизацию
        if (Auth::check()) {
            // echo 'авторизован';
            return view('admin.index', ['path' => F::getPathQuery()]);
        } else {
            // echo 'не авторизован';
            return view('admin.login-form' );
        }
    }

    /**
     *  Форма регистрации
     */
    public function regForm()
    {
        return view('admin.reg-form');
    }

    /**
     *  Регистрации админа
     */
    public function reg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);
        return redirect()->route('admin.index');
        
    }

    /**
     *  авторизируем пользователя
     */
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('admin.index');
    }

    /**
     *  Выходим из авторизации
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.index');
    }
}
