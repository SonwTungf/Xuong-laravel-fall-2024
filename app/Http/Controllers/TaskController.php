<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Tạo mới nhiệm vụ
    public function store(Request $request, $projectId)
    {
        $task = Task::create([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'status' => $request->status,
            'project_id' => $projectId
        ]);
        return response()->json(['message' => 'Nhiệm vụ được tạo', 'task' => $task], 201);
    }

    // Xem danh sách nhiệm vụ theo dự án
    public function index($projectId)
    {
        $tasks = Task::where('project_id', $projectId)->get();
        return response()->json(['tasks' => $tasks], 200);
    }

    // Xem chi tiết nhiệm vụ
    public function show($projectId, $taskId)
    {
        $task = Task::where('project_id', $projectId)->where('id', $taskId)->firstOrFail();
        return response()->json($task, 200);
    }

    // Cập nhật nhiệm vụ
    public function update(Request $request, $projectId, $taskId)
    {
        $task = Task::where('project_id', $projectId)->where('id', $taskId)->firstOrFail();
        $task->update($request->all());
        return response()->json(['message' => 'Nhiệm vụ được cập nhật', 'task' => $task], 200);
    }

    // Xóa nhiệm vụ
    public function destroy($projectId, $taskId)
    {
        Task::where('project_id', $projectId)->where('id', $taskId)->firstOrFail()->delete();
        return response()->json(['message' => 'Nhiệm vụ được xóa'], 200);
    }
}
