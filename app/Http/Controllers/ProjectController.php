<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function view()
    {
        try {
            return view('Admin.project');
        } catch (\Exception $e) {
            // Handle the exception or log the error
            return response()->json(['error' => 'An error occurred while rendering the view.'], 500);
        }
    }

    public function insertproject(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pname' => 'required|max:10000',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'ecost' => 'numeric|min:0',
            'pexpenditure' => 'numeric|min:0',
            'allocation' => 'numeric|min:0',
            'expenditure' => 'numeric|min:0',
            'commitment' => 'numeric|min:0',
            'progress' => 'numeric|min:0',
            'status_lastweek' => 'string',
            'next_week' => 'string',
            'remaining_work' => 'string',
            'issues' => 'string',
        ]);

        if ($validator->fails()) {
            return redirect('/projectform')
                ->with('error', "Something went wrong. Check input details!");
        }

        try {
            $project = new Project();
            $project->no = $request->input('no');
            $project->rc = $request->input('rc');
            $project->pname = $request->input('pname');
            $project->wing = $request->input('wing');
            $project->end_user = $request->input('end_user');
            $project->start_date = $request->input('start_date');
            $project->end_date = $request->input('end_date');
            $project->ecost = $request->input('ecost');
            $project->pexpenditure = $request->input('pexpenditure');
            $project->allocation = $request->input('allocation');
            $project->expenditure = $request->input('expenditure');
            $project->commitment = $request->input('commitment');
            $project->progress = $request->input('progress');
            $project->status_lastweek = $request->input('status_lastweek');
            $project->next_week = $request->input('next_week');
            $project->remaining_work = $request->input('remaining_work');
            $project->issues = $request->input('issues');
            $project->total_re_funds = $project->ecost - ($project->pexpenditure + $project->commitment + $project->progress);
            $project->current_re_funds = $project->allocation - ($project->expenditure + $project->commitment + $project->progress);

            if ($project->save()) {
                return redirect('/projectform')
                    ->with('success', "Successfully Inserted!");
            } else {
                throw new \Exception("Error occurred while inserting project!");
            }
        } catch (\Exception $e) {
            return redirect('/projectform')
                ->with('error', $e->getMessage());
        }
    }

    public function projects(){
        $project = Project::all();
        return view('Admin.projectview',compact('project'));
    }

    public function functions($no){
        $project = Project::where('no',$no)->get();
        $task = Task::where('no',$no)->get();
        return view('Admin.functions',compact('project','task'));
    }

    public function updateform($no){
        $project = Project::where('no',$no)->get();
        $task = Task::where('no',$no)->get();
        $date = Task::select('updated_at')->first();
        return view('Admin.updateform',compact('project','task','date'));
    }

    public function updateproject(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'ecost' => 'numeric|min:0',
            'pexpenditure' => 'numeric|min:0',
            'allocation' => 'numeric|min:0',
            'expenditure' => 'numeric|min:0',
            'commitment' => 'numeric|min:0',
            'status_lastweek' => 'string',
            'next_week' => 'string',
            'remaining_work' => 'string',
            'issues' => 'string',
        ]);
    
        if ($validator->fails()) {
            return redirect('/projects')->with('error', "Something went wrong.Check input details!");            
        }
    
        try {
            $project = Project::find($id);
            $no = $request->input('no');
            $project->rc = $request->input('rc');
            $project->start_date = $request->input('start_date');
            $project->end_date = $request->input('end_date');
            $project->ext_time = $request->input('ext_time');
            $project->ecost = $request->input('ecost');
            $project->pexpenditure = $request->input('pexpenditure');
            $project->allocation = $request->input('allocation');
            $project->expenditure = $request->input('expenditure');
            $project->commitment = $request->input('commitment');
            $project->progress = $request->input('progress');

            $project->total_re_funds = $project->ecost - ($project->pexpenditure + $project->commitment + $project->progress) ;
            $project->current_re_funds = $project->allocation -  ($project->expenditure + $project->commitment + $project->progress);
            $project->status_lastweek = $request->input('status_lastweek');
            $project->next_week = $request->input('next_week');
            $project->remaining_work = $request->input('remaining_work');
            $project->issues = $request->input('issues');
            
            if ($project->update()) {
                return Redirect::route('update.project', ['no' => $no])->with('success', 'Project updated successfully.');
            } else {
                throw new \Exception("Error occurred while inserting project!");
            }
        } catch (\Exception $e) {
            return redirect('/projects')->with('error', $e->getMessage());
        }
    

    }
}
