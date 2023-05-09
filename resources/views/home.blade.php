@extends('layouts.admin')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">Welcome, {{ Auth::User()->role }}.

                            </h3>
                        </div>

                        @if (!Auth::User()->profile)
                            <div>

                                {{-- <a href="{{ route('crew.create') }}" class="btn btn-white">Create Profile</a> --}}
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                                    data-bs-target="#crewcreate">
                                    Create Profile
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="crewcreate" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('profile.store') }}" method="POST">
                                                @csrf


                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="exampleInputText1" class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="exampleInputText1" aria-describedby="textHelp">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputText1" class="form-label">Subid</label>
                                                        <input type="text" name="subid" class="form-control"
                                                            id="exampleInputText1" aria-describedby="textHelp">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputText1" class="form-label">Place</label>
                                                        <input type="text" name="place" class="form-control"
                                                            id="exampleInputText1" aria-describedby="textHelp">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputText1" class="form-label">Birth</label>
                                                        <input type="date" name="birth" class="form-control"
                                                            id="exampleInputText1" aria-describedby="textHelp">

                                                    </div>
                                                    <div class="mb-3">
                                                        <select class="form-select" name="job_id">

                                                            @foreach ($jobs as $job)
                                                                <option value="{{ $job->id }}">{{ $job->code }}
                                                                    ({{ $job->name }})
                                                                </option>
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h5 class="text-white">Data User</h5>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="nama" class="form-control" value="{{ Auth::User()->name }}"
                                    id="exampleInputEmail1" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="nama" class="form-control" value="{{ Auth::User()->email }}"
                                    id="exampleInputEmail1" readonly>
                            </div>
                        </div>

                        {{-- <form action="{{ route('company.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company Name</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">User</label>
                                <select class="form-select form-select-lg" name="user_id" id="">
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </form> --}}
                    </div>
                </div>
            </div>
            <div class="col-8">
                @if (Auth::User()->profile)
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h5 class="text-white">Data Crew</h5>
                        </div>
                        <div class="card-body">

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Crew ID</label>
                                <input type="text" name="nama" class="form-control"
                                    value="{{ Auth::User()->profile->crew->subid }}" id="exampleInputEmail1" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Crew Name</label>
                                <input type="text" name="nama" class="form-control"
                                    value="{{ Auth::User()->profile->crew->name }}" id="exampleInputEmail1" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Crew Job</label>
                                <input type="text" name="nama" class="form-control"
                                    value="{{ Auth::User()->profile->crew->job->name }}" id="exampleInputEmail1" readonly>
                            </div>

                            {{-- <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company Names</th>
                                    <th scope="col">Company Codes</th>
                                    <th scope="col">Users</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companys as $index => $company)
                                    <tr>
                                        <th scope="row">{{ $index + 1 }}</th>
                                        <th scope="row">{{ $company->nama }}</th>
                                        <th scope="row">{{ $company->code }}</th>
                                        <th scope="row">
                                            @isset($company->user_id)
                                                {{ $company->User->name }}
                                            @endisset
                                        </th>
                                        <th scope="row">

                                            <div class="input-group mb-3">
                                                <button class="btn btn-sm btn-outline-primary" type="button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#com{{ $company->id }}">Edit</button>
                                                <form onsubmit="return confirm('Are you sure?');"
                                                    action="{{ route('company.destroy', $company->id) }}" method="POST">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-outline-danger" type="submit"
                                                        id="button-addon2">Delete</button>
                                                </form>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="com{{ $company->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="{{ route('company.update', $company->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="mb-3">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Company Name</label>
                                                                        <input type="text" name="nama"
                                                                            value="{{ $company->nama }}"
                                                                            class="form-control" id="exampleInputEmail1">
                                                                    </div>

                                                                </div>
                                                                <div class="mb-3">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Company Code</label>
                                                                        <input type="text" name="nama"
                                                                            value="{{ $company->code }}"
                                                                            class="form-control" id="exampleInputEmail1">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">User</label>
                                                                    <select class="form-select form-select-lg"
                                                                        name="user_id" id="">
                                                                        @foreach ($users as $user)
                                                                            <option value="{{ $user->id }}">
                                                                                {{ $user->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
