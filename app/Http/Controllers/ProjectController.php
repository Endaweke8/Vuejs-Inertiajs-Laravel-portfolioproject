<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\SkillResource;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $projects=ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render("Projects/index",compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills=Skill::all();
        return Inertia::render("Projects/create",compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        if($request->hasFile('image')){
            $image=$request->file('image')->store('projects');
            Project::create([
                'name'=>$request->name,
                'image'=>$image,
                'skill_id'=>$request->skill_id,
                'project_url'=>$request->project_url,
            ]);
    
            return Redirect::route('projects.index')->with('message','Projected created Successfuly');
          }
          return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $skills=Skill::all();

        return Inertia::render("Projects/edit",compact('skills','project'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);
        $project->delete();
        return Redirect::route('projects.index')->with('message','Projected Deleted Successfuly');
    }
}
