<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Http\Resources\SkillResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreSkillRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UpdateSkillRequest;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills=SkillResource::collection(Skill::all());
        // dd($skills);
        return Inertia::render('Skills/index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return Inertia::render('Skills/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillRequest $request)
    {
      

      if($request->hasFile('image')){
        $image=$request->file('image')->store('skills');

        Skill::create([
            'name'=>$request->name,
            'image'=>$image,
        ]);

        return Redirect::route('skills.index')->with('message','Skill created Successfuly');
      }
      return Redirect::back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return Inertia::render('Skills/edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        $image=$skill->image;

      if($request->hasFile('image')){
          Storage::delete($skill->image);

        $image=$request->file('image')->store('skills');

        Skill::update([
            'name'=>$request->name,
            'image'=>$image,
        ]);

        return Redirect::route('skills.index');
      }
      return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {  Storage::delete($skill->image);
        $skill->delete();
        return Redirect::route('skills.index')->with('message','Skill Deleted Successfuly');
        //
    }
}
