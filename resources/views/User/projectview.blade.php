@extends('userfront')
@section('content')
<style>
    .table thead th {
        background-color: #504343;
        color: #fff;
    }
    .table th, .table td {
        max-width: 200px; 
        overflow: hidden; 
        text-overflow: ellipsis; 
        white-space: nowrap;
        color:black;
        font-weight: 800
    }
</style>
<div class="row">
    <div class="col-2 mt-3">
        <div style="padding-left: 20px">
            <img src="assets/img/logo.png" height="100px" alt="">
        </div>
    </div>
    <div class="col-8 mt-5">
        <div class="text-center">
            <h2 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{$wing}}</h2>
        </div>
    </div>
    <div class="col-2 mt-5">
        <div style="padding-right: 20px">
            <form method="post" action="/searchofficer">
                {{csrf_field()}}
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search"
                            aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="name" placeholder="Search here...">
                    <button style="background-color: #504343;color:white;border-radius:10px" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<table class="table mt-3 text-center" style="padding-left: 20px;padding-right:20px">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Project No</th>
            <th scope="col">RS/SC</th>
            <th scope="col">Project Name</th>
            <th scope="col">Status</th>
            <th scope="col">Remaining Time</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody style="background-color: yellow;">
        @php
            $x = 0; 
        @endphp
        @foreach ($projects as $project)
            @php 
                $x++;
                $now = \Carbon\Carbon::now();
                $remaining_time = $remaining_time_list[$project->id];
            @endphp
            <tr>
                <td>
                    {{ $x }}
                </td>
                <td>{{ $project->no }}</td>
                <td>{{ $project->rc }}</td>
                <td style="max-width: 500px;">{{ $project->pname }}</td>
                @if($project->start_date <= $now)
                    <td>Ongoing</td>
                @else
                    <td>Not yet start</td>
                @endif
                <td style="max-width: 250px;">
                    {{ $remaining_time['years'] }} years, 
                    {{ $remaining_time['months'] }} months, 
                    {{ $remaining_time['days'] }} days
                </td>
                <td style="max-width: 500px;">
                    <a href="/financial/{{$project->no}}" class="btn btn-danger btn-sm">Financial <br>Statement</a>
                    <a href="/timeplan/{{$project->no}}" class="btn btn-success btn-sm">Time <br>Plan</a>
                    <a class="btn btn-secondary btn-sm">Project <br>Progress</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>
@endsection