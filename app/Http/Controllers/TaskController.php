<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function store(Request $request, $projectId)
    {
        $project = Project::findOrFail($projectId);
        $task = $project->tasks()->create($request->all());
        return response()->json(['message' => 'Nhiệm vụ được tạo', 'task' => $task]);
    }


    public function index($projectId)
    {
        $tasks = Task::where('project_id', $projectId)->get();
        return response()->json($tasks);
    }


    public function show($projectId, $taskId)
    {
        $task = Task::where('project_id', $projectId)->findOrFail($taskId);
        return response()->json($task);
    }


    public function update(Request $request, $projectId, $taskId)
    {
        $task = Task::where('project_id', $projectId)->findOrFail($taskId);
        $task->update($request->all());
        return response()->json(['message' => 'Nhiệm vụ được cập nhật', 'task' => $task]);
    }


    public function destroy($projectId, $taskId)
    {
        Task::where('project_id', $projectId)->findOrFail($taskId)->delete();
        return response()->json(['message' => 'Nhiệm vụ được xóa']);
    }
}
