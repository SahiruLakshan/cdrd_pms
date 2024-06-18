@extends('userfront')
@section('content')
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{$wing_name}}</h4>
</div>
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Timeline of Ongoing Projects</h4>
</div>
<table class="table mt-3" style="border: 2px solid white;margin: auto;width:1300px">
    <thead>
        <tr style="background-color: blueviolet">
            <th style="border-right: 2px solid white;color:white">Ser</th>
            <th style="border-right: 2px solid white;color:white">Project No</th>
            <th style="border-right: 2px solid white;color:white">Project Name</th>
            <th style="color:white">Time Duration</th>
        </tr>
    </thead>
    <tbody>
        @php
            $x=0;
        @endphp
        @foreach ($filteredProjects as $project)
            @php
                $x++;
            @endphp
            <tr>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:50px;white-space: normal;text-align:justify">{{$x}}</td>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:300px;white-space: normal;text-align:justify">Project {{$project->no}} &nbsp;&nbsp; RC{{$project->rc}} ({{ \Carbon\Carbon::parse($project->start_date)->format('Y') }})</td>
                <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:1000px;white-space: normal;text-align:justify">{{$project->pname}}</td>
                <td style="color: rgb(208, 233, 16);font-weight: 700;width:400px">{{$project->start_date}} ---------------------- {{$project->end_date}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-3" style="padding-left: 1250px">
    {{-- <a href="/progress" style="color: white;padding-right:960px"><i><- Back to Progresss Page</i></a> --}}
    <a href="/summary/{{$wing_name}}" class="btn btn-info" ><i>Overall Summary</i></a>
</div>
@endsection