@extends('adminfront')
@section('content')
{{-- <form role="form">
    <label>Email</label>
    <div class="mb-3">
      <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
    </div>
    <label>Password</label>
    <div class="mb-3">
      <input type="email" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
    </div>
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
      <label class="form-check-label" for="rememberMe">Remember me</label>
    </div>
    <div class="text-center">
      <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
    </div>
  </form> --}}
  @foreach ($project as $project) 
  <main class="main-content mt-0">
    <h4>Update Project No {{$project->no}} - {{$project->pname}}</h4><hr style="height:2px;background-color:black">
    <form id="updateForms" action="{{ url('update-project',$project?->id) }}" method="post">
        @csrf
        @method('PUT')
        <section>
            <div class="mb-2">
                <input type="hidden" name="no" id="no" class="form-control" value="{{$project->no}}">
            </div>
            <div class="col-2">
                <div class="mb-2">
                    <label>RC:</label><input type="text" name="rc" value="{{$project->rc}}" class="form-control" placeholder="RC">
                </div>
            </div>
           {{-- <div class="row">
               <div class="col-3">
                   <div class="mb-2">
                       <label>Project No:</label><input type="text" value="{{$project->no}}" name="no" class="form-control" placeholder="Project_No">
                   </div>
               </div>
               <div class="col-8">
                   <div class="mb-2">
                       <label>Project Name:</label><input type="text" value="{{$project->pname}}" name="pname" class="form-control" placeholder="Project_Name">
                   </div>
               </div>
           </div> --}}
           {{-- <div class="row">
               <div class="col-5">
                   <label for="">Select Wing</label>
                   <select class="form-select" name="wing">
                       <option hidden></option>
                       <option value="Radio & Electronic Wing">Radio & Electronic Wing</option>
                       <option value="Telecommunication Wing">Telecommunication Wing</option>
                       <option value="Electrical & Mechanical Wing">Electrical & Mechanical Wing
                       </option>
                       <option value="IT & GIS Wing">IT & GIS Wing</option>
                       <option value="Armament & Ballistic Wing">Armament & Ballistic Wing</option>
                       <option value="Missile Wing">Missile Wing</option>
                       <option value="NBC Wing">NBC Wing</option>
                       <option value="Marine Wing">Marine Wing</option>
                       <option value="Nano and Modern Technology Wing">Nano and Modern Technology Wing
                       </option>
                       <option value="Sattelite & Surveillance Wing">Sattelite & Surveillance Wing
                       </option>
                       <option value="Cyber Security Wing">Cyber Security Wing</option>
                       <option value="Ammo & Explosive Wing">Ammo & Explosive Wing</option>
                       <option value="Aeronautical Wing">Aeronautical Wing</option>
                   </select>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>End User:</label><input type="text" value="" name="end_user" class="form-control" placeholder="End User">
                   </div>
               </div>
           </div> --}}

           <div class="row">
               <div class="col-5">
                   <div class="mb-2">
                       <label>Start Date:</label><input type="date" value="{{$project->start_date}}" name="start_date" class="form-control" placeholder="Start Date">
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>End Date:</label><input type="date" value="{{$project->end_date}}" name="end_date" class="form-control" placeholder="End Date">
                   </div>
               </div>
           </div>

           <div class="row">
               <div class="col-5">
                   <div class="mb-2">
                       <label>Total Estimated Cost(Rs.):</label><input type="number" value="{{$project->ecost}}" name="ecost" class="form-control" placeholder="Total Estimated Cost">
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>Previous Expenditure:</label><input type="number" value="{{$project->pexpenditure}}" name="pexpenditure" class="form-control" placeholder="Previous Expenditure">
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-5">
                   <div class="mb-2">
                       <label>Allocation ({{ \Carbon\Carbon::now()->format('Y') }}):</label><input type="number" value="{{$project->allocation}}" name="allocation" class="form-control" placeholder="Allocation (2024)">
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>Expenditure ({{ \Carbon\Carbon::now()->format('Y') }}):</label><input type="number" value="{{$project->expenditure}}" name="expenditure" class="form-control" placeholder="Expenditure (2024)">
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-5">
                   <div class="mb-2">
                       <label>Commitment(Rs.):</label><input type="number" value="{{$project->commitment}}" name="commitment" class="form-control" placeholder="Commitment">
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>On Progress(Rs.):</label><input type="number" value="{{$project->progress}}" name="progress" class="form-control" placeholder="On Progress">
                   </div>
               </div>

               <h5>Remaining Funds(Total): Rs.{{$project->remaining_total}} | Remaining Funds(2024): Rs.{{$project->remaining_current_year}}</h5>
           </div><br>
           <div class="row">
               <div class="col-5">
                   <label>Status of the Last Week & Work in Progress:</label>
                   <div class="mb-2">
                       <textarea name="status_lastweek" id="" cols="57" rows="5" placeholder="Status of the Last Week & Work in Progress">{{$project->status_lastweek}}</textarea>
                   </div>
               </div>
               <div class="col-6">
                   <label>Next Week Plan:</label>
                   <div class="mb-2">
                       <textarea name="next_week" id="" cols=70" rows="5" placeholder="Next Week Plan">{{$project->next_week}}</textarea>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-5">
                   <label>Remaining Work to be Completed:</label>
                   <div class="mb-2">
                       <textarea name="remaining_work" id="" cols="57" rows="5" placeholder="Remaining Work to be Completed">{{$project->remaining_work}}</textarea>
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>Issues/Problems/Constraints:</label>
                       <div class="mb-2">
                           <textarea name="issues" id="" cols=70" rows="5" placeholder="Issues/Problems/Constraints:">{{$project->issues}}</textarea>
                       </div>
                   </div>
               </div>
           </div>
      
            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update</button>
          
        </form>
        @php
            $total = 0;
        @endphp
           
           <h4 class="mt-3" style="color: rgb(228, 106, 106)">Tasks Update - Up to {{ \Carbon\Carbon::parse($date->updated_at)->format('Y-m-d') }}

        </h4>
           
           
           <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tasks</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Start Month</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">End Month</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Weight %</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Week %</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Present Week %</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Final Percentage %</th>
                <th></th>
              </tr>
            </thead>
                    <tbody>
                    @foreach ($task as $task)
                    <form action="{{ url('update-task',$task?->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-2">
                            <input type="hidden" name="no" id="no" class="form-control" value="{{$project->no}}">
                        </div>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm" style="max-width: 400px; overflow: hidden; text-overflow: ellipsis; white-space: normal;">
                                                {{$task->task}}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <input type="date" id="yearMonthInput" value="{{$task->start_month}}" class="form-control" name="start_month">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <input type="date" id="yearMonthInput" value="{{$task->end_month}}" class="form-control" name="end_month">
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center">
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <input type="number" name="weight" class="form-control" value="{{$task->weight}}" placeholder="Present Week" value=0>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center">
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <input type="number" name="completion_lastweek" value="{{$task->completion_lastweek}}" class="form-control" placeholder="Last Week" value=0>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center">
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <input type="number" name="completion_presentweek" class="form-control" value="{{$task->completion_presentweek}}" placeholder="Present Week" value=0>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center">
                                    {{$task->final_percentage}} %
                                </td>
                                @php
                                    $total = $total + $task->final_percentage
                                @endphp
                                <td><button type="submit" class="btn btn-sm bg-gradient-dark w-100 my-4 mb-2">Update</button></td>
                            </tr>
                    </form>
                    @endforeach
                    <tr>
                        <td style="text-align:center" colspan="6"><b>Total Completion Percentage:</b></td>
                        <td style="text-align: center">{{$total}} %</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;color:red" colspan="6"><b>Percentage remaining to complete:</b></td>
                        @php
                            $remaining = 100 - $total
                        @endphp
                        <td style="text-align: center;color:red"><b>{{$remaining}} %</b></td>
                    </tr>
                    </tbody>
            </table>
        </section>
  </main>
@endforeach
@endsection

@section('scripts')
<script>
    function submitForms() {
        document.getElementById("updateForms").submit();
    }
</script>

@endsection