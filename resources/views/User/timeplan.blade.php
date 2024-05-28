@extends('userfront')
@section('content')
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Time Plan of Project 80 : RC 3 (2022)</h4>
</div>
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Cross Site (XSS) Scripting & Prevention System</h4>
</div>

<table class="table mt-3" style="border: 2px solid white; width: 1000px; margin: auto;">
    <thead>
        <tr style="background-color: blueviolet">
            <th style="border-right: 2px solid white;color:white">Task</th>
            <th style="color:white">Time Duration</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:500px;white-space: normal;text-align:justify">Feasibility Study and Literature Survey</td>
            <td style="color: rgb(208, 233, 16);font-weight: 700;width:500px">25/05/2023 ---------------------- 25/06/2023</td>
        </tr>
    </tbody>
</table>

<div class="mt-3 text-center">
    <a href="/financial" style="color: white;padding-right:590px"><i><- Back to Financial Statement Page</i></a>
    <a href="/progress" class="btn btn-danger"><i>Project Progress</i></a>
</div>
@endsection