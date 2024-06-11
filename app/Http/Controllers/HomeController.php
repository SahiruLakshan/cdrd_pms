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

    public function progress($no){
        $project = Project::where('no',$no)->first();
        $tasks = Task::where('no',$no)->get();
        $tot_weight = Task::where('no',$no)->sum('weight');
        $tot_final = Task::where('no',$no)->sum('final_percentage');
        return view('User.progress',compact('project','tasks','tot_weight','tot_final'));
    }

    public function timeline($wing){
        $wing_name = $wing;
        $projects = Project::where('wing', $wing)->orderBy('end_date', 'asc')->get();
        return view('User.timeline',compact('projects','wing_name'));
    }

    public function summary($wing) {
        $now = \Carbon\Carbon::now();
        $wing_name = $wing;
        $projects = Project::where('wing', $wing)->orderBy('end_date', 'asc')->get();
    
        foreach ($projects as $project) {
            // Calculate the sum of final_percentage for tasks related to the project
            $project->tasks_sum = Task::where('no', $project->no)->sum('final_percentage');
            
            // Calculate completed and remaining months
            $startDate = \Carbon\Carbon::parse($project->start_date);
            $endDate = \Carbon\Carbon::parse($project->end_date);
            $totalMonths = $startDate->diffInMonths($endDate) + 1; // +1 to include the end month
            $completedMonths = $startDate->diffInMonths($now) + 1; // +1 to include the current month
            $remainingMonths = max(0, $totalMonths - $completedMonths);
    
            // Add these calculations to the project object
            $project->total_months = $totalMonths;
            $project->completed_months = max(0, $completedMonths);
            $project->remaining_months = $remainingMonths;

            // $project->remaining_cost = $project->pexpenditure;
        }
    
        return view('User.summary', compact('projects', 'wing_name'));
    }
    

}
