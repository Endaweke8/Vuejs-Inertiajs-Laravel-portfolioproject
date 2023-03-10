<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Resources\SkillResource;
use App\Http\Resources\ProjectResource;

class WelcomeController extends Controller
{
   public function welcome(){
    $skills=SkillResource::collection(Skill::all());
    $projects=ProjectResource::collection(Project::with('skill')->get());
    return Inertia::render('Welcome',compact('skills','projects'));
   }
}
