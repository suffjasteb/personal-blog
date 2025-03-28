<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //showLoginForm() → Menampilkan halaman login admin.blade.php.
    public function showLoginForm() {
        return view('admin');
    }

    public function login(Request $request) {
        $credentials = $request->validate([ // Memastikan user mengisi email & password dengan format yang benar.
            'name' => 'required', // Menggunakan name, bukan email
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)){ // mengecek apakah username dan password cocok dengan database
            return redirect('/create')->with('success','login berhasil'); //jika cocok user akan masuk ke halaman create
        } else {
            return back()->withErrors(['error' => 'username atau password salah']);
            //  Jika salah, user akan tetap di halaman login dan muncul pesan error.
        }
    }

    public function logout(Request $request) {
        Auth::logout(); // Auth::logout() → Menghapus session login.
        return redirect('/admin')->with('success', 'Logout berhasil');
 // setelah log out user kembali ke login page
    }
}