<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Import the User model

class AuthController extends Controller
{
    // Show Login Form
    public function showLoginForm()
    {
        return view('auth.login');
    }

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return response()->json([
            'success' => true,
            'redirect' => route('admin.dashboard')  // ✅ Ensure it uses the correct route name
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Invalid credentials. Please try again.'
    ], 401);
}




    // Handle Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // Example: Fetch User Data
    public function getUserData()
    {
        $users = User::all(); // Fetch all users
        return view('users.index', compact('users'));
    }
}

