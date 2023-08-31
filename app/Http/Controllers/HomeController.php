<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Function to show the home page
    public function index()
    {
        // Check if the user is logged in
        if (session()->has('user')) {
            return view('home');
        }else{
            return redirect()->route('login');
        }
    }
}
