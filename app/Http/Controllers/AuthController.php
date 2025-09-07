<?php

namespace App\Http\Controllers;
use App\Models\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
       // validasi input
       $request->validate([
        'email' => 'required|email',
        'password_hash' => 'required|min:8'
        ]);

        // panggil API login (backend)
        $response = Http::post('http://localhost:8000/api/auth/login', [
            'email' => $request->input('email'),
            'password_hash' => $request->input('password_hash'),
        ]);

        $data = $response->json();

        if ($response->successful() && isset($data['status']) && $data['status'] === true) {
            // simpan data user ke session (opsional)
            session(['user' => $data]);

            return redirect('/dashboard')->with('success', $data['message']);
        } else {
            return back()->withErrors([
                'login' => $data['message'] ?? 'Login gagal',
            ]);
        }
    }
}
