<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return response()->json(['message' => 'Dự án được tạo thành công', 'project' => $project]);
    }

    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }


    public function show($id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project);
    }


    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return response()->json(['message' => 'Dự án được cập nhật', 'project' => $project]);
    }


    public function destroy($id)
    {
        Project::destroy($id);
        return response()->json(['message' => 'Dự án được xóa']);
    }
}
