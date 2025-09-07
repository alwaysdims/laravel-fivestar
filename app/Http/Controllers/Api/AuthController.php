<?php

namespace App\Http\Controllers\Api;

use App\Models\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $email = $request->input('email');
        $password = ($request->input('password_hash'));

        $rules = [
            'email' => 'required|email',
            'password_hash' => 'required|min:8|max:25'
        ];

        $validate = Validator::make($request->all(), $rules);

        if($validate->fails()){
            return response()->json([
                'status' => false,
                'message' => 'All fields are required',
                'errors' => $validate->errors()
            ],422);
        }

        if(Auth::where('email', $email)->exists()){
            $user = Auth::where('email', $email)->first();
            if(Hash::check($password, $user->password_hash)){
                return response()->json([
                    'status' => true,
                    'message' => 'Login successful',

                ], 200);
            } else{
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid Login'
                ], 401);
            }
        }

    }
}
