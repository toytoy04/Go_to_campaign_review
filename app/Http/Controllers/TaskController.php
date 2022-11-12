<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use App\Task;

class TaskController extends Controller
{
    public function show(Travel $travel)
    {
        return view('task.show', compact('travel'));
    }

    public function store(Request $request, Travel $travel)
    {
        $task = new Task();
        $task->travel_id = $travel->id;
        $task->fill($request->all())->save();

        return redirect()->route('task.show', compact('travel'));
    }

    public function update(Request $request, Travel $travel)
    {
        foreach($travel->tasks as $task){
            $task->fill([
                      'title' => $request->title,
                      'deadline' => $request->deadline,
                      'isFinished' => $request->isFinished,
            ]);
        }
        return redirect()->route('task.show', compact('travel'));
    }
}
