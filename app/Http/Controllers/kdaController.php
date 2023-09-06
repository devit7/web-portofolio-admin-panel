<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kda;

class kdaController extends Controller
{
    //create
    public function create()
    {
        return view('kda.create');
    }
    //read
    public function read()
    {
        //check if the user is logged in
        if (session()->has('user')) {
            $kda = kda::all();
            return view('kda', compact('kda'));
        }else{
            return redirect()->route('login');
        }
    }
    //edit
    public function edit($id)
    {
        $kda = kda::find($id);
        return view('kda.edit', compact('kda'));
    }
    //update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required',
            'level' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        $kda = kda::find($id);
        $kda->update([
            'category' => $request->category,
            'level' => $request->level,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        if ($kda) {
            return redirect()->route('kda.read')->with('success', 'KDA data updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
    //destroy
    public function destroy($id)
    {
        $kda = kda::find($id);
        $kda->delete();
        return redirect()->route('kda.read')->with('success', 'KDA data deleted successfully');
    }
    //store
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'level' => 'required',
            'description' => 'required',
            'link' => 'required',
        ]);

        


        $kda = kda::create([
            'category' => $request->category,
            'level' => $request->level,
            'description' => $request->description,
            'link' => $request->link,
        ]);

        if ($kda) {
            return redirect()->route('kda.read')->with('success', 'KDA data created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
    
}
