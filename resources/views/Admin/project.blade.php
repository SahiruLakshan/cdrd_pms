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

  <main class="main-content mt-0">
    <h4>INSERT PROJECT</h4><hr style="height:2px;background-color:black">
    <form action="/insertproject" method="post">
        @csrf
        <section>
           <div class="row">
               <div class="col-2">
                   <div class="mb-2">
                       <label>Project No:</label><input type="text" name="no" class="form-control" placeholder="Project_No">
                   </div>
               </div>
                <div class="col-2">
                    <div class="mb-2">
                        <label>RC:</label><input type="text" name="rc" class="form-control" placeholder="RC">
                    </div>
                </div>
               <div class="col-7">
                   <div class="mb-2">
                       <label>Project Name:</label><input type="text" name="pname" class="form-control" placeholder="Project_Name">
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-5">
                   <label for="">Select Wing</label>
                   <select class="form-select" name="wing">
                       <option hidden>Select Wing</option>
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
                       <label>End User:</label><input type="text" name="end_user" class="form-control" placeholder="End User">
                   </div>
               </div>
           </div>

           <div class="row">
               <div class="col-5">
                   <div class="mb-2">
                       <label>Start Date:</label><input type="date" name="start_date" class="form-control" placeholder="Start Date">
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>End Date:</label><input type="date" name="end_date" class="form-control" placeholder="End Date">
                   </div>
               </div>
           </div>

           <div class="row">
               <div class="col-5">
                   <div class="mb-2">
                       <label>Total Estimated Cost(Rs.):</label><input type="number" value=0 name="ecost" class="form-control" placeholder="Total Estimated Cost">
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>Previous Expenditure(Rs.):</label><input type="number" name="pexpenditure" class="form-control" placeholder="Previous Expenditure">
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-5">
                   <div class="mb-2">
                       <label>Allocation (2024)(Rs.):</label><input type="number" name="allocation" class="form-control" placeholder="Allocation (2024)">
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>Expenditure (2024)(Rs.):</label><input type="number" name="expenditure" class="form-control" placeholder="Expenditure (2024)">
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-5">
                   <div class="mb-2">
                       <label>Commitment(Rs.):</label><input type="number" name="commitment" class="form-control" placeholder="Commitment">
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>On Progress(Rs.):</label><input type="number" name="progress" class="form-control" placeholder="On Progress">
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-5">
                   <label>Status of the Last Week & Work in Progress:</label>
                   <div class="mb-2">
                       <textarea name="status_lastweek" id="" cols="57" rows="5" placeholder="Status of the Last Week & Work in Progress"></textarea>
                   </div>
               </div>
               <div class="col-6">
                   <label>Next Week Plan:</label>
                   <div class="mb-2">
                       <textarea name="next_week" id="" cols=70" rows="5" placeholder="Next Week Plan"></textarea>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-5">
                   <label>Remaining Work to be Completed:</label>
                   <div class="mb-2">
                       <textarea name="remaining_work" id="" cols="57" rows="5" placeholder="Remaining Work to be Completed"></textarea>
                   </div>
               </div>
               <div class="col-6">
                   <div class="mb-2">
                       <label>Issues/Problems/Constraints:</label>
                       <div class="mb-2">
                           <textarea name="issues" id="" cols=70" rows="5" placeholder="Issues/Problems/Constraints:"></textarea>
                       </div>
                   </div>
               </div>
           </div>
           <div>
               <button type="submit" class="btn bg-gradient-dark w-90 my-4 mb-2">Submit The Project Details</button>
           </div>
        </section>
    </form>
  </main>
@endsection