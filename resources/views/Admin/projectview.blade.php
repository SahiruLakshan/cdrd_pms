@extends('adminfront')
@section('content')
    <main class="main-content mt-0">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-8">
                                    <h6>Projects table - {{ Auth::user()->wing }}</h6>
                                </div>
                                <div class="col-4">
                                    <form method="post" action="/searchProject"
                                        class="d-flex align-items-center justify-content-end">
                                        {{ csrf_field() }}
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="project_name"
                                                style="height: 38px;" placeholder="Search here..." required>
                                            <button type="submit" class="btn btn-primary"
                                                style="height: 38px;">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center justify-content-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Project No</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Project Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    @foreach ($project as $project)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="text-sm font-weight-bold">{{ $project->no }}</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm"
                                                                style="max-width: 500px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                                {{ $project->pname }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <a href="{{ url('functions/project' . $project->no) }}"
                                                        class="btn btn-warning btn-sm" style="color: black;">Task Add
                                                        Section</a>
                                                    <a href="{{ url('updateform/project' . $project->no) }}"
                                                        class="btn btn-success btn-sm">Update Project Details</a>
                                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
