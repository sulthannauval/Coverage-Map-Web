<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $login = $request->login;
        $password = $request->password;

        // Cari admin berdasarkan username ATAU email
        $admin = Admin::where('email', $login)
                      ->orWhere('username', $login)
                      ->first();

        // dd([
        //     'Input Login' => $login,
        //     'Input Password' => $password,
        //     'Data Admin' => $admin
        // ]);


        if ($admin && md5($password) == $admin->password) {
            // Jika password cocok
            /* session([
                'id_admin' => $admin->id_admin,
                'nama' => $admin->nama,
                'username' => $admin->username,
                'email' => $admin->email,
            ]); */
            Auth::guard('admin')->login($admin);
            return redirect('/admin');
        }

        // Jika login gagal
        return back()->withErrors([
            'login' => 'Username/Email atau password salah.',
        ]);
    }
}
