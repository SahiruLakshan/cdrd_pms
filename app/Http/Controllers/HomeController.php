<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('User.home');
    }

    public function projects(Request $request){
        $wing = $request->input('wing');
        $projects = Project::where('wing', $wing)->get();
        $remaining_time_list = [];
    
        foreach ($projects as $project) {
            $end_date = Carbon::parse($project->end_date);
            $now = Carbon::now();
            $diff = $end_date->diff($now);
    
            $remaining_time_list[$project->id] = [
                'years' => $diff->y,
                'months' => $diff->m,
                'days' => $diff->d 
            ];
        }
        return view('User.projectview', compact('projects', 'wing', 'remaining_time_list'));
    }
    

    public function financial($no){
        $project = Project::where('no',$no)->first();
        return view('User.financial',compact('project'));
    }

    public function timeplan($no){
        $project = Project::where('no',$no)->first();
        $tasks = Task::where('no',$no)->get();
        return view('User.timeplan',compact('tasks','project'));
    }

    public function progress(){
        return view('User.progress');
    }

    public function timeline(){
        return view('User.timeline');
    }

    public function summary(){
        return view('User.summary');
    }

}
