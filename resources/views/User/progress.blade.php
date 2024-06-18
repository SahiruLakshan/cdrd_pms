@extends('userfront')
@section('content')
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Project Progress of Project {{$project->no}} : RC {{$project->rc}}</h4>
</div>
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{$project->pname}}</h4>
</div>
<table class="table mt-3" style="border: 2px solid white; width:1500px;margin: auto;">
    <thead>
        <tr style="background-color: blueviolet">
            <th style="border-right: 2px solid white;color:white;width:50px">Task No</th>
            <th style="border-right: 2px solid white;color:white;text-align:center">Task</th>
            <th style="border-right: 2px solid white;color:white;">Weight Factor</th>
            <th style="border-right: 2px solid white;color:white;">Last Week Completion</th>
            <th style="border-right: 2px solid white;color:white;">Present Week Completion</th>
            <th style="color:white;width:50px">Present Final Completion</th>
        </tr>
    </thead>
    <tbody>
        @php
            $x = 0;
        @endphp
        @foreach ($tasks as $task)
            @php
                $x++;
            @endphp
            <tr>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:50px;white-space: normal;text-align:center">{{$x}}</td>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:500px;white-space: normal;text-align:justify">{{$task->task}}</td>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;;white-space: normal;text-align:center">{{$task->weight}}%</td>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;;white-space: normal;text-align:center;background-color:rgba(255, 0, 0, 0.995)">{{$task->completion_lastweek}}%</td>
                <td style="color: rgb(0, 0, 0); border-right: 2px solid white;font-weight: 700;;white-space: normal;text-align:center;background-color:yellow">{{$task->completion_presentweek}}%</td>
                <td style="color: rgb(255, 255, 255);font-weight: 700;white-space: normal;text-align:center">{{$task->final_percentage}}%</td>
            </tr>
        @endforeach
        
        <tr>
            <td colspan="2" style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;white-space: normal;text-align:center"><i>Total Percentage:</i></td>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;white-space: normal;text-align:center;font-size:20px">{{$tot_weight}}%</td>
            <td colspan="2" style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;white-space: normal;text-align:center"><i>Total Progress Percentage:<br>Up to {{ \Carbon\Carbon::now()->format('Y-m-d') }}</i></td>
            <td style="color: rgb(255, 255, 255);font-weight: 700;white-space: normal;text-align:center;font-size:20px">{{ number_format($tot_final, 2) }}%</td>
        </tr>
        
        {{-- <tr>
            <td colspan="5" style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;white-space: normal;text-align:center"><i>Progress Percentage Up to:15/05/2024</i></td>
            <td style="color: rgb(255, 255, 255);font-weight: 700;white-space: normal;text-align:center"><i>4%</i></td>
        </tr> --}}
    </tbody>
</table>

<div class="mt-3 text-center">
    <a href="/timeplan" style="color: white;padding-right:1160px"><i><- Back to Time Plan Page</i></a>
    <a href="/timeline/{{$project->wing}}" class="btn btn-secondary"><i>Overall Timeline</i></a>
</div>
@endsection
