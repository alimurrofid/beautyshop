<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function authenticate(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);


        if (auth()->attempt(array('name' => $input['name'], 'password' => $input['password']))) {
            if (auth()->user()->role == 'admin') {
                $request->session()->regenerate();
                Alert::toast('Selamat datang ' . auth()->user()->name, 'success');
                return redirect()->route('dashboard.home');
            } else if (auth()->user()->role == 'user') {
                $request->session()->regenerate();
                Alert::toast('Selamat datang ' . auth()->user()->name, 'success');
                return redirect()->route('landingpage');
            }
        }
        Alert::toast('Username atau password salah', 'error');
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::toast('Anda berhasil logout', 'success');
        return redirect()->route('landingpage');
    }
}
