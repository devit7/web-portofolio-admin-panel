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
        $kda = kda::all();
        return view('kda', compact('kda'));
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

        if($request->category == '1'){
            $categoryValue = 'International';
        }elseif($request->category == '2'){
            $categoryValue = 'National';
        }elseif($request->category == '3'){
            $categoryValue = 'Challenge';
        }elseif($request->category == '4') {
            $categoryValue = 'Course';
        }elseif($request->category == '5') {
            $categoryValue = 'Internship';
        }

        if($request->level == '1'){
            $levelValue = 'Competition';
        }elseif($request->level == '2'){
            $levelValue = 'Certification';
        }


        $kda = kda::create([
            'category' => $categoryValue,
            'level' => $levelValue,
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
