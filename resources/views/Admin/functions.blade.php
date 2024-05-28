@extends('adminfront')
@section('content')
@foreach ($project as $project)

<main class="main-content mt-0">
    
    <form action="/savetask" method="POST">
        @csrf
        <div class="row">
            <div class="col-11">
                <h4><b>Project No {{$project->no}} - {{$project->pname}}</b></h4>
            </div>
            {{-- <div class="col-2">
                <button type="button" class="btn btn-primary btn-sm float-end" id="add-row">Add Task</button>
            </div> --}}
        </div>
        <div class="col-5">
            <div class="mb-2">
                <input type="hidden" name="no" id="no" class="form-control" value="{{$project->no}}">
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <div class="mb-2">
                    <label>Task:</label><input type="text" name="task" id="task" class="form-control" placeholder="Task">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="mb-2">
                    <label for="yearMonthInput">Start Month:</label><input type="date" id="start_month" class="form-control" name="start_month">
                </div>
            </div>
            <div class="col-2">
                <div class="mb-2">
                    <label for="yearMonthInput">End Month:</label><input type="date" id="end_month" class="form-control" name="end_month">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-2">
                    <label>Weight Factor of Task:</label><input type="number" name="weight" id="weight" class="form-control" placeholder="Task_Weight" value=0>
                </div>
            </div>
            <div class="col-2">
                <div class="mb-2">
                    <label>Completion of Last Week:</label>
                    <input type="number" name="completion_lastweek" class="form-control" id="completion_lastweek" placeholder="Last Week" value=0>
                </div>
            </div>
            <div class="col-2">
                <div class="mb-2">
                    <label>Completion of Present Week:</label><input type="number" name="completion_presentweek" class="form-control" id="completion_presentweek" placeholder="Present Week" value=0>
                </div>
            </div>
        </div><br>
        <div class="row mt-3">
            <div>
                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
    </form>
    @endforeach
    <hr style="height:3px;background-color:rgb(241, 0, 0)">
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Task</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Start Month</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">End Month</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Weight Factor</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Week</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Present Week</th>
                <th></th>
              </tr>
            </thead>
            @foreach ($task as $task)
            <tbody id="dynamic-table-body">
                <tr>
                    <td>{{$task->task}}</td>
                    <td>{{$task->start_month}}</td>
                    <td>{{$task->end_month}}</td>
                    <td>{{$task->weight}} %</td>
                    <td>{{$task->completion_lastweek}} %</td>
                    <td>{{$task->completion_presentweek}} %</td>
                </tr>
                <tr></tr>
            </tbody>
            @endforeach
          </table>
        </div>
    </div>
</main>

@endsection

{{-- @section('scripts')
    {{-- <script>
    var resizefunc = [];
    </script> --}}
    {{-- <script>
    let rowCounter = 1; // Initialize rowCounter variable

    document.getElementById("add-row").addEventListener("click", function() {
    
        let newRow = `
                <tr id="row-${rowCounter}">
                    <td>${rowCounter}</td>
                    <td>${document.getElementById('no').value}</td>
                    <td>${document.getElementById('task').value}</td>
                    <td>${document.getElementById('start_month').value}</td>
                    <td>${document.getElementById('end_month').value}</td>
                    <td>${document.getElementById('weight').value}</td>
                    <td>${document.getElementById('completion_lastweek').value}</td>
                    <td>${document.getElementById('completion_presentweek').value}</td>
                    <td><button class="btn btn-danger btn-sm remove-row"><i class="zmdi zmdi-close"></i></button></td>
                </tr>
            `;
        document.getElementById("dynamic-table-body").innerHTML += newRow;
        rowCounter++;
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Item Added",
            showConfirmButton: false,
            timer: 1000
        });
    
        document.querySelectorAll(".remove-row").forEach(function(btn) {
        btn.addEventListener("click", function() {
            let row = this.parentNode.parentNode;
            row.parentNode.removeChild(row);
        });
    });
    
    });
    
    document.getElementById("task-form").addEventListener("submit", function(event) {
        event.preventDefault(); 
        
        let rows = document.querySelectorAll("#dynamic-table-body tr");
        let formData = [];
    
        rows.forEach(function(row) {
            let rowData = {
                no: row.cells[1].textContent,
                task: row.cells[2].textContent,
                start_month: row.cells[3].textContent,
                end_month: row.cells[4].textContent,
                weight: row.cells[5].textContent,
                completion_lastweek: row.cells[6].textContent,
                completion_presentweek: row.cells[7].textContent,
            };
            formData.push(rowData);
        });
        
        // Send data to Laravel backend using AJAX
        fetch('/savetask', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                formData: formData
            })
        })
        .then(response => response.json())
        .then(data => {
            alert("submitted");
        })
        .catch(error => {
            console.log(error)
        });
    });

    </script> --}}
{{-- @endsection --}} 