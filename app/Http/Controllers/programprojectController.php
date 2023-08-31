<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\programproject;
use App\Models\Project;

class programprojectController extends Controller
{
    //create
    public function create(){
        return view('programproject.create');
    }
    //read
    public function read(){
        //check if the user is logged in
        if (session()->has('user')) {
            $programproject = programproject::all();
            $datanama = Project::all();
            return view('programproject', compact('programproject', 'datanama'));
        }else{
            return redirect()->route('login');
        }

    }
    //edit
    public function edit($id){
        $programproject = programproject::find($id);
        return view('programproject.edit', compact('programproject'));
    }
    //update
    public function update(Request $request, $id){
        $this->validate($request, [
            'nama_project' => 'required',
            'nama_program_yang_digunakan' => 'required',
        ]);

        $programproject = programproject::find($id);
        $programproject->update([
            'nama_project' => $request->nama_project,
            'nama_program_yang_digunakan' => $request->nama_program_yang_digunakan,
        ]);

        if ($programproject) {
            return redirect()->route('programproject.read')->with('success', 'programproject data updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
    //destroy
    public function destroy($id){
        $programproject = programproject::find($id);
        $programproject->delete();

        if ($programproject) {
            return redirect()->route('programproject.read')->with('success', 'programproject data deleted successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }

    //store
    public function store(Request $request){
        $this->validate($request, [
            'nama_project' => 'required',
            'nama_program_yang_digunakan' => 'required',
        ]);

        $programproject = programproject::create([
            'nama_project' => $request->nama_project,
            'nama_program_yang_digunakan' => $request->nama_program_yang_digunakan,
        ]);

        if ($programproject) {
            return redirect()->route('programproject.read')->with('success', 'programproject data created successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }

}
