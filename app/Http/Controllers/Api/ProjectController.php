<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function ProjectList(){
        return Project::all();
    }

    public function ProjectCategory($id){
        $projects = Project::where('category_id',$id)->get();
        return $projects;
    } //End Method
    
    public function ProjectDetail($id){
        $project = Project::findOrFail($id);
        return $project;
    } //End Method
}
