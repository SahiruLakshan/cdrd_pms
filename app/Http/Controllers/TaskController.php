<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;

class TaskController extends Controller
{
    public function savetask(Request $request)
    {

        // $formData = $request->input('formData');

        // foreach ($formData as $data) {
        //     Task::create($data); 
        // }
        $task = new Task();

        $task->no = $request->input('no');
        $no = $request->input('no');
        $task->task = $request->input('task');
        $task->start_month = $request->input('start_month');
        $task->end_month = $request->input('end_month');
        $task->weight = $request->input('weight');
        $task->completion_lastweek = $request->input('completion_lastweek');
        $task->completion_presentweek = $request->input('completion_presentweek');
        $final = ($task->weight / 100) * $task->completion_presentweek;
        $task->final_percentage = $final;

        $task->save();

        return Redirect::route('functions.project', ['no' => $no])->with('success', 'Tasks saved successfully.');
    }

    public function updatetask(Request $request, $id)
    {
        $task = Task::find($id);

        $no = $request->input('no');
        $task->start_month = $request->input('start_month');
        $task->end_month = $request->input('end_month');
        $task->weight = $request->input('weight');
        $task->completion_lastweek = $request->input('completion_lastweek');
        $task->completion_presentweek = $request->input('completion_presentweek');
        $final = ($task->weight / 100) * $task->completion_presentweek;
        $task->final_percentage = $final;

        $task->update();
        return Redirect::route('update.project', ['no' => $no])->with('success', 'Tasks updated successfully.');
    }

    public function deletetask($id){
        $task = Task::find($id);
        $no = $task->no;
        $task->delete();
        return Redirect::route('functions.project', ['no' => $no])->with('success', 'Tasks deleted successfully.');

    }
}
