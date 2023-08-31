<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proglanguage;

class ProglanguageController extends Controller
{
    //create
    public function create()
    {
        return view('proglanguage.create');
    }
    //read
    public function read()
    {   
        //check if the user is logged in
        if (session()->has('user')) {
            $proglanguage = Proglanguage::all();
            return view('proglanguage', compact('proglanguage'));
        }else{
            return redirect()->route('login');
        }
    }
    //edit
    public function edit($id)
    {
        $proglanguage = Proglanguage::find($id);
        return view('proglanguage.edit', compact('proglanguage'));
    }
    //update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $proglanguage = Proglanguage::find($id);
        $proglanguage->update([
            'name' => $request->name,
        ]);

        if ($proglanguage) {
            return redirect()->route('proglanguage.read')->with('success', 'Proglanguage data updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
    //destroy
    public function destroy($id)
    {
        $proglanguage = Proglanguage::find($id);
        $proglanguage->delete();
        return redirect()->route('proglanguage.read')->with('success', 'Proglanguage data deleted successfully');
    }
    //store
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $proglanguage = Proglanguage::create([
            'name' => $request->name,
        ]);

        if ($proglanguage) {
            return redirect()->route('proglanguage.read')->with('success', 'Proglanguage data created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
    
}
