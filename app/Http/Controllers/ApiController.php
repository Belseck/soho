<?php

namespace App\Http\Controllers;


use App\Models\Company;
use App\Models\Tag;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where("outstanding",true)->get()->toArray();
        // dd($projects);
        return $projects;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return $project;
    }
}