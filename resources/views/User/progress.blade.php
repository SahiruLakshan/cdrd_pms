@extends('userfront')
@section('content')
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Project Progress of Project 80 : RC 3 (2022)</h4>
</div>
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Cross Site (XSS) Scripting & Prevention System</h4>
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
        <tr>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:50px;white-space: normal;text-align:center">1</td>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:500px;white-space: normal;text-align:justify">Feasibility Study and Literature Survey</td>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;;white-space: normal;text-align:center">5%</td>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;;white-space: normal;text-align:center;background-color:rgba(255, 0, 0, 0.995)">90%</td>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white;font-weight: 700;;white-space: normal;text-align:center;background-color:yellow">98%</td>
            <td style="color: rgb(255, 255, 255);font-weight: 700;white-space: normal;text-align:center">4%</td>
        </tr>
        <tr>
            <td colspan="2" style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;white-space: normal;text-align:center"><i>Total Percentage:</i></td>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;white-space: normal;text-align:center"><i>5%</i></td>
            <td colspan="2" style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;white-space: normal;text-align:center"><i>Total Progress Percentage:</i></td>
            <td style="color: rgb(255, 255, 255);font-weight: 700;white-space: normal;text-align:center"><i>4%</i></td>
        </tr>
        {{-- <tr>
            <td colspan="5" style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;white-space: normal;text-align:center"><i>Progress Percentage Up to:15/05/2024</i></td>
            <td style="color: rgb(255, 255, 255);font-weight: 700;white-space: normal;text-align:center"><i>4%</i></td>
        </tr> --}}
    </tbody>
</table>

<div class="mt-3 text-center">
    <a href="/timeplan" style="color: white;padding-right:1160px"><i><- Back to Time Plan Page</i></a>
    <a href="/timeline" class="btn btn-secondary"><i>Overall Timeline</i></a>
</div>
@endsection
