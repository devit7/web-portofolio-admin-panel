<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function read()
    {
        //check if the user is logged in
        if (session()->has('user')) {
            $user = User::all();
            return view('user', compact('user'));
        }else{
            return redirect()->route('login');
        }

    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::find($id);
        $user->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        if ($user) {
            return redirect()->route('user.read')->with('success', 'User data updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.read')->with('success', 'User data deleted successfully');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        if ($user) {
            return redirect()->route('user.read')->with('success', 'New user has been created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
}
