@extends('userfront')
@section('content')
<div class="text-center mt-3">
   <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Financial Statement of Project {{$project->no}} : RC 3 (2022)</h4>
</div>
<div class="text-center mt-3">
    <h4 style="font-family: inter;color:white;text-transform: uppercase;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">{{$project->pname}}</h4>
</div>
 

<table class="table mt-3" style="border: 2px solid white; width: 1000px; margin: auto;">
    <tbody>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Initiated By</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">{{$project->wing}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">End User</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">{{$project->end_user}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Start Date</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">{{$project->start_date}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">End Date</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">{{$project->end_date}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Total Estimated Cost</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">Rs. {{$project->ecost}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Previous Expenditure</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">Rs. {{$project->pexpenditure}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Allocation(2024)</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">Rs. {{$project->allocation}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Expenditure(2024)</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">Rs. {{$project->expenditure}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Commitment</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">Rs. {{$project->commitment}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">On Progress</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">Rs. {{$project->progress}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Remaining Funds (Total)</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">Rs. {{$project->remaining_total}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700;width:500px">Remaining Funds (2024)</td>
            <td style="color: white; font-size: 20px; font-weight: 700;width:500px">Rs. {{$project->remaining_current_year}}</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700; width: 500px;">Status at the End of Last Week</td>
            <td rowspan="2" style="color: white; font-size: 20px; font-weight: 700; width: 500px; white-space: normal;text-align:justify">
                {{$project->status_lastweek}}
            </td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700; width: 500px;">Work in Progress</td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700; width: 500px;">Next Week Plan</td>
            <td style="color: white; font-size: 20px; font-weight: 700; width: 500px; white-space: normal;text-align:justify">
                {{$project->next_week}}
            </td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700; width: 500px;">Remaining Work to be Completed</td>
            <td style="color: white; font-size: 20px; font-weight: 700; width: 500px; white-space: normal;text-align:justify">
                {{$project->remaining_work}}
            </td>
        </tr>
        <tr>
            <td style="color: rgb(0, 0, 0); border-right: 2px solid white; font-size: 20px; font-weight: 700; width: 500px;">Issues / Problems / Constraints </td>
            <td style="color: white; font-size: 20px; font-weight: 700; width: 500px; white-space: normal;text-align:justify">
                {{$project->issues}}
            </td>
        </tr>
    </tbody>
</table>

<div class="row mt-3 text-center">
    <div class="col">
        <form action="/projectview" method="get">
            <input type="hidden" name="wing" value="{{$project->wing}}">
            <button type="submit" style="color: rgb(255, 255, 255); background: transparent; border: none;"><i><- Back to Project Page</i></button>

        </form>
    </div>
    <div class="col">
        <a href="/timeplan/{{$project->no}}" class="btn btn-success" style="color: black"><i>Time Plan</i></a>
    </div>
</div>

@endsection