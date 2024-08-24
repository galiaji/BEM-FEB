<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Ambil user yang sedang login
            $user = Auth::user();

            // Redirect berdasarkan role
            if ($user->role == 'admin') {
                return redirect()->route('admin.program.index')->with('successLogin', 'Anda Berhasil Login.');
            } else {
                return redirect('/home'); // Redirect ke halaman user biasa jika bukan admin
            }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Menampilkan form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Menangani proses register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Default role as user
        ]);

        Auth::login($user);

        // Redirect berdasarkan role setelah registrasi
        if ($user->role == 'admin') {
            return redirect()->route('admin.program.index');
        } else {
            return redirect('/home'); // Redirect ke halaman user biasa
        }
    }

    // Menangani proses logout
    public function logout(Request $request)
    {
        Auth::logout(); // Menghapus sesi pengguna dari server

        // Invalidasi sesi yang ada
        $request->session()->invalidate();

        // Regenerasi token CSRF untuk menghindari serangan CSRF setelah logout
        $request->session()->regenerateToken();

        return redirect('/login'); // Mengarahkan pengguna kembali ke halaman login
    }
}