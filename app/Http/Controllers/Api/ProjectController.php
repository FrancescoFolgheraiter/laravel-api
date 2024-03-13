<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Project;

// Helpers per slug
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        //tramite questa funzione ritorno il file json con al struttura delineata nelle []
        return response()->json([
            'code'=> 200,
            'message'=>'ok',
            'data'=> [
                'projects'=> $projects
            ]
        ]);
    }
    //---------------------------------------------------------------
    public function show(string $slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        return response()->json([
            'code'=> 200,
            'message'=>'ok',
            'data'=> [
                'projects'=> $project
            ]
        ]);
    }
}
