<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    // Function to show the login page
    public function index()
    {
        return view('login');
    }

    // Function to validate the login
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        echo $request->username;
        echo $request->password;

        // Get the user data
        $user = User::where('username', $request->username)->first();

        // Check if the user exists
        if ($user) {
            echo $user->password;
            echo $request->password;
            // Check if the password is correct
            if ($request->password == $user->password) {
                // Create session
                $request->session()->put('user', $user);
                echo "Login success";
                return redirect()->route('main');
            } else {
                echo "Login failed";
                return back()->with('fail', 'Invalid password');
            }
        } else {
            echo "Login failed";
            return back()->with('fail', 'No account found for this username');
        }
    }

    // Function to logout
    public function logout()
    {
        // Destroy the session
        if (session()->has('user')) {
            session()->pull('user');
            return redirect()->route('login');
        }
    }

}
