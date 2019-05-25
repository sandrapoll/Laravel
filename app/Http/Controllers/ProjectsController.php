<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getProjects()
    {
        $projects = DB::table('projects')->get();
        return view('/list', ['projects' => $projects]);
    }

    /**
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request, Project $project)
    {
        return view('edit', ['project' => $project]);
    }

    /**
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->save();
        return redirect()->route('project.list');
    }

    /**
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Project $project)
    {
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->save();
        return redirect()->route('project.list');
    }

    /**
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request, Project $project)
    {
        $id = $project->id;
        DB::table('projects')->where('id', '=', $id)->delete();
        return redirect()->route('project.list');
    }
}
