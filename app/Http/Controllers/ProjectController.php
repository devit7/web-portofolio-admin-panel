<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //create
    public function create()
    {
        return view('project.create');
    }
    //read
    public function read()
    {
        //check if the user is logged in
        if (session()->has('user')) {
            $project = Project::all();
            return view('project', compact('project'));
        }else{
            return redirect()->route('login');
        }

    }
    //edit
    public function edit($id)
    {
        $project = Project::find($id);
        return view('project.edit', compact('project'));
    }
    //update
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $project = Project::find($id);
        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        if ($project) {
            return redirect()->route('project.read')->with('success', 'Project data updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
    //destroy
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('project.read')->with('success', 'Project data deleted successfully');
    }
    //store
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $project = Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        if ($project) {
            return redirect()->route('project.read')->with('success', 'Project data added successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Some problem occurred, please try again');
        }
    }
}
