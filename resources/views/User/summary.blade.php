@extends('userfront')
@php
  use Carbon\Carbon;
@endphp
<style>
    /* Inline CSS to style the progress bar */progress {
      width: 100%;
      -webkit-appearance: none;
      appearance: none;
    }
    
    progress::-webkit-progress-bar {
      background-color: #ffffff;
    }
    
    progress::-webkit-progress-value {
      background-color: #00ff08; /* Change this color to your desired color */
    }
    
    progress::-moz-progress-bar {
      background-color: #00ff08; /* Change this color to your desired color */
    }
    
    progress[value]::-ms-fill {
      background-color: #00ff08; /* Change this color to your desired color */
    }

    .progress-container {
      position: relative;
      width: 300px; /* Same as the width of the progress bar */
      height: 30px; /* Adjust height as needed */
    }
    
    .progress-text {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: rgb(0, 0, 0); /* Text color */
      font-weight: bold;
      z-index: 1;
      padding-left: 250px

    }

    progress {
      height: 30px; /* Adjust height to match the progress container */
    }
</style>
@section('content')
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{$wing_name}}</h4>
</div>
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Overall Summary of Ongoing Projects</h4>
</div>
<table class="table mt-3" style="border: 2px solid white;margin: auto;width:1300px">
    <thead>
        <tr style="background-color: blueviolet">
            <th style="border-right: 2px solid white;color:white">Ser</th>
            <th style="border-right: 2px solid white;color:white">Project No</th>
            <th style="border-right: 2px solid white;color:white">Project Name</th>
            <th style="color:white">Summary</th>
        </tr>
    </thead>
    <tbody>
        @php
            $x = 0;
        @endphp

        @foreach ($projects as $project)
            @php
                $x++;
                $cost = $project->ecost/1000000;
            @endphp
            <tr>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:100px;white-space: normal;text-align:justify">{{$x}}</td>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:100px;white-space: normal;text-align:justify">Project {{$project->no}} <br>RC{{$project->rc}} <br>({{ \Carbon\Carbon::parse($project->start_date)->format('Y') }})</td>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:1200px;white-space: normal;text-align:justify">
                  {{$project->pname}}<br><br>
                  <span style="font-size: 13px">Start Date: {{$project->start_date}}</span><br>
                  <span style="font-size: 13px">End Date: {{$project->end_date}}</span><br>
                  <span style="font-size: 13px">Project Time: {{ round($project->total_months) }} Months
                    @if($project->ext_time != null)  
                      <span class="badge badge-danger">( {{$project->ext_time}} Months Extended )</span>
                    @endif
                  </span><br><br>
                  <span style="font-size: 13px">Total Project Cost: {{$cost}} Mn</span>
                </td>
                <td style="width:800px">  
                    <div class="progress-container">
                        <span style="color:white">Work Progress: </span>&nbsp;&nbsp;
                        <progress value="{{ $project->tasks_sum }}" max="100"></progress>
                        <span class="progress-text" style="font-size: 12px">{{ number_format($project->tasks_sum, 2) }}% Completed</span>
                    </div><br>


                    <div class="progress-container">
                        <span style="color:white">Time Line: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <progress value="{{ round($project->completed_months) }}" max="{{ round($project->total_months) }}"></progress>

                        @if (Carbon::parse($project->end_date)->lessThan(Carbon::today()))
                            <span class="progress-text" style="font-size: 12px">Time Completed</span>
                        @else
                            <span class="progress-text" style="font-size: 12px">{{ round($project->completed_months) }} Months Completed</span>
                        @endif
                        
                        <div class="row">
                          <div class="col">
                          </div>
                          
                          <div class="col mt-1">
                            <div style="width: 10px; height: 10px; background-color: white;margin-left:100px "></div>
                          </div>
                          <div class="col">
                            @if (Carbon::parse($project->end_date)->lessThan(Carbon::today()))
                              <span style="color:white;font-size: 12px"></span>
                            @else
                              <span style="color:white;font-size: 12px">{{ round($project->remaining_months) }}  Months Remaining</span>
                            @endif
                          </div>
                        </div>
                    </div><br><br>

                    @php
                      $percentage = 100 - ($project->total_re_funds / $project->ecost) * 100;

                    @endphp
                    <div class="progress-container">
                        <span style="color:white">Financial Status:</span>&nbsp;
                        <progress value="{{ $project->total_re_funds }}" max="{{$project->ecost}}"></progress>
                        <span class="progress-text" style="font-size: 12px">{{ $percentage }}% Expenditure</span>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-3 text-center">
  <a href="/timeline/{{$project->wing}}" style="color: white;padding-right:960px"><i><- Back to TimeLine</i></a>
  <a href="/" class="btn btn-info"><i>Go to Home</i></a>
</div>
@endsection