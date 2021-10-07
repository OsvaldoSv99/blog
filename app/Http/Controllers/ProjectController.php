<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{

    public function index()
    {
        
        return view('projects.index', [
            'projects' => Project::latest('id','DESC')->paginate()
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $fields=request()->validate([
            'title' => 'required',
            'url' =>'required',
            'description' => 'required',
        ]);
       Project::create($fields);

        return redirect()->route('project.index');
    }

    public function show()
    {   
    
        return view('projects.show',[
            'project'=>$project
        ]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
