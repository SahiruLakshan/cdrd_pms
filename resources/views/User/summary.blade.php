@extends('userfront')
@section('content')
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">IT & GIS Wing</h4>
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
        <tr>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:50px;white-space: normal;text-align:justify">1</td>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:300px;white-space: normal;text-align:justify">Project 80 RC3 (2022)</td>
            <td style="color: rgb(255, 255, 255); border-right: 2px solid white;font-weight: 700;width:1000px;white-space: normal;text-align:justify">Cross Site (XSS) Scripting & Prevention System</td>
            <td style="color: rgb(208, 233, 16);font-weight: 700;width:800px">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endsection