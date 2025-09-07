<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return response()->json([
            'status' => true,
            'data' => $users,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'username' => 'required|string|max:25',
            'email' => 'required|email',
            'password_hash' => 'required|min:8',
            'nama' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'role' => 'required',
            'profile' => 'nullable',
        ];

        $validate = Validator::make($request->all(),$rules);

        if($validate->fails()){
            return response()->json([
                'status' => false,
                'message' => 'All fields are required',
                'errors' => $validate->errors()
            ], 422);
        }

        if(User::where('email', $request->input('email'))->exists()){
            return response()->json([
                'status' =>false,
                'message' => 'Email already exists'
            ], 400);
        }

        if(User::Where('username', $request->input('username'))->exists()){
            return response()->json([
                'status' =>false,
                'message' => 'Username already exists'
            ], 400);
        }

        $users = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password_hash' => Hash::make($request->input('password_hash')),
            'nama' => $request->input('nama'),
            'phone' => $request->input('phone'),
            'role' => $request->input('role'),
            'profile' => $request->input('profile'),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            'data' => $users
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::find($id);
        if($users){
            return response()->json([
                'status' => true,
                'data' => $users,
            ],200);
        } else{
            return response()->json([
                'status' => false,
                'message' => 'User not found'
            ],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
