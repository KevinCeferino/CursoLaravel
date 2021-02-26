<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class  ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::orderBy('created_at', 'DESC')->paginate()
        ]);
    }

    public function show(Project $project){

        // return $id;
        return view('projects.show', [
        'project' => $project
        ]);
    }
    public function create(){
        return view('projects.create');
    }
    public function store(SaveProjectRequest $request){

        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');
    }
    public function edit(Project $project){

        return view('projects.edit', [
            'project' => $project
        ]);
    }
    public function update(Project $project){
        request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ])->with('status', 'El proyecto fue actualizado con exito');

        $project->update([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description')
        ]);
        return redirect()->route('projects.show', $project);
    }
    public function destroy(Project $project){

        $project->delete();

        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito');
    }
}
