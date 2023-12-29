<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.user', [
            'users' => User::all()
        ]);
    }

    public function store(StoreUserRequest $request)
    {
        try {
            User::create([
                'name' => $request->validated('name'),
                'phone_number' => $request->validated('phone_number'),
                'email' => $request->validated('email'),
                'password' => Hash::make($request->validated('password')),
            ]);

            Alert::success('Success', 'Register berhasil');
            return redirect()->route('login');
        } catch (\Throwable $e) {
            Alert::error('Error', 'Register gagal');
            return redirect()->back();
        }
    }

    public function verif(User $user)
    {
        try {
            $user->update([
                'status' => 1
            ]);
            return redirect()->back();
        } catch (\Throwable $e) {
            Alert::error('Error', 'Verifikasi gagal');
            return redirect()->back();
        }
    }
}
