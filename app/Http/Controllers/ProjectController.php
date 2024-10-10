<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Tạo mới dự án
    public function store(Request $request)
    {
        $project = Project::create($request->all());
        return response()->json(['message' => 'Dự án được tạo thành công', 'project' => $project], 201);
    }

    // Xem danh sách dự án
    public function index()
    {
        $projects = Project::all();
        return response()->json(['projects' => $projects], 200);
    }

    // Xem chi tiết dự án
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return response()->json($project, 200);
    }

    // Cập nhật dự án
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        return response()->json(['message' => 'Dự án được cập nhật', 'project' => $project], 200);
    }

    // Xóa dự án
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return response()->json(['message' => 'Dự án được xóa'], 200);
    }
}
