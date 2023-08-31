<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    //create
    public function create()
    {
        return view('about.create');
    }
    //read
    public function read()
    {
        //check if the user is logged in
        if (session()->has('user')) {
            $about = About::all();
            return view('about', compact('about'));
        }else{
            return redirect()->route('login');
        }
    }
    //edit
    public function edit($id)
    {
        $about = About::find($id);
        return view('about.edit', compact('about'));
    }
    //update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $about = About::find($id);
        $about->update([
            'description' => $request->description,
        ]);

        if ($about) {
            return redirect()->route('about.read')->with('success', 'About data updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
    //destroy
    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->route('about.read')->with('success', 'About data deleted successfully');
    }
    //store
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $about = About::create([
            'description' => $request->description,
        ]);

        if ($about) {
            return redirect()->route('about.read')->with('success', 'About data created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
}
