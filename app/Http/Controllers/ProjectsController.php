<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function getProjects()
    {
        $projects = DB::table('projects')->get();

        return view('list', ['projects' => $projects]);
    }
}
