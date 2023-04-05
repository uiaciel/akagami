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
                            <h3 class="mb-0  text-white">Crew Database</h3>
                        </div>
                        <div>

                            {{-- <a href="{{ route('crew.create') }}" class="btn btn-white">Add New Crew</a> --}}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newcrew">
                                Add New Crew
                            </button>
                            <button id="button">Row count</button>

                            <!-- Modal -->
                            <div class="modal fade" id="newcrew" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog        ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Crew</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('crew.store') }}" method="post">
                                            @csrf

                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="exampleInputText1" class="form-label">ID</label>
                                                    <input type="text" class="form-control" name="subid">

                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputText1" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name">

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputText1" class="form-label">Place of Birth</label>
                                                    <input type="text" class="form-control" name="place">

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputText1" class="form-label">Date of Birth</label>
                                                    <input type="date" placeholder="YYYY/MM/DD" class="form-control"
                                                        name="birth">

                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputText1" class="form-label">Job</label>
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
                                                <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->


                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <div class="d-flex">

                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a id="tab-all" href="#all" class="nav-link active" data-bs-toggle="tab"
                                        role="tab">All <span
                                            class="badge rounded-pill bg-primary">{{ $crew->count() }}</span></a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a id="tab-onboard" href="#onboard" class="nav-link" data-bs-toggle="tab"
                                        role="tab">On-board Crews<span
                                            class="badge rounded-pill bg-primary">{{ $crew->where('status', 'On board')->count() }}</span></a>
                                </li>
                                <li class="nav-item">
                                    <a id="tab-standby" href="#standby" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Stand-by Crews
                                        <span
                                            class="badge rounded-pill bg-primary">{{ $crew->where('status', 'Stand-by')->count() }}</span></a>
                                </li>

                                <li class="nav-item">
                                    <a id="tab-standby" href="#unstandby" class="nav-link" data-bs-toggle="tab"
                                        role="tab">Unstand-by Crews
                                        <span
                                            class="badge rounded-pill bg-primary">{{ $crew->where('status', 'Unstand-by')->count() }}</span></a>
                                </li> --}}


                            </ul>



                        </div>


                    </div>
                    <div class="card-body">

                        <div class="row card-header bg-white py-4">

                            <div class="col-md-6">
                                <form action="">
                                    <div class="input-group mb-3">



                                        <select class="form-select" name="carijob">
                                            <option selected>== SELECT JOB ==</option>

                                            {{-- @foreach ($jobs as $job)
                                                <option value="1">{{ $job->name }}</option>
                                            @endforeach --}}

                                        </select>

                                        <select class="form-select" name="cariage">
                                            <option selected>== SELECT AGE ==</option>
                                            <option value="1">18-30</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>

                                        <button class="btn btn-outline-danger" type="submit">SORT</button>

                                    </div>
                                </form>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Search</label>
                                    <input type="text" class="form-control" id="caridata">
                                </div>
                            </div>

                        </div>

                        <div class="tab-content">
                            <div id="all" class="tab-pane fade show active">
                                <table id="" class="table table-striped datatable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>番号<br>No.</th>
                                            <th>船員ID<br>Crew ID</th>
                                            <th>名前<br>Name</th>
                                            <th>生年月日<br>D.O.B</th>
                                            <th>年齢<br>Age</th>
                                            <th>職種<br>Job</th>
                                            <th>旅券番号<br>Passport No.</th>
                                            <th>作用<br>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crew as $index => $crews)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td><a
                                                        href="{{ route('crew.show', $crews->subid) }}">{{ $crews->subid }}</a>
                                                </td>
                                                <td>{{ $crews->name }}</td>
                                                <td>{{ $crews->birth }}</td>
                                                <td>{{ \Carbon\Carbon::parse($crews->birth)->diff(\Carbon\Carbon::now())->y }}
                                                </td>
                                                <td>{{ $crews->job->code ?? '' }}</td>
                                                <td>{{ $crews->passport->no ?? 'PASSPORT NO' }}</td>
                                                <td>
                                                    <div class="input-group mb-3">

                                                        <a href="{{ route('crew.show', $crews->subid) }}"
                                                            class="btn btn-sm btn-outline-primary"
                                                            target="_blank">View</a>

                                                        <a href="/print/crew/{{ $crews->subid }}"
                                                            class="btn btn-sm btn-outline-success"
                                                            target="_blank">Print</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                </table>
                            </div>
                            <div id="onboard" class="tab-pane fade">
                                <table id="" class="table table-striped datatable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>番号<br>No.</th>
                                            <th>船員ID<br>Crew ID</th>
                                            <th>名前<br>Name</th>
                                            <th>生年月日<br>D.O.B</th>
                                            <th>年齢<br>Age</th>
                                            <th>職種<br>Job</th>
                                            <th>旅券番号<br>Passport No.</th>
                                            <th>作用<br>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crew->where('status', 'On board') as $index => $onboard)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td><a href="/crew/{{ $onboard->subid }}">{{ $onboard->subid }}</a></td>

                                                <td>{{ $onboard->name }}</td>

                                                <td>{{ $onboard->birth }}</td>
                                                <td>{{ \Carbon\Carbon::parse($onboard->birth)->diff(\Carbon\Carbon::now())->y }}
                                                </td>
                                                <td>{{ $onboard->job->code }}</td>
                                                <td>{{ $onboard->passport->no ?? 'PASSPORT NO' }}</td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <a href="{{ route('crew.show', $onboard->subid) }}"
                                                            class="btn btn-sm btn-outline-primary"
                                                            target="_blank">View</a>

                                                        <a href="/print/crew/{{ $onboard->subid }}"
                                                            class="btn btn-sm btn-outline-success"
                                                            target="_blank">Print</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div id="standby" class="tab-pane fade">
                                <table id="" class="table table-striped datatable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>番号<br>No.</th>
                                            <th>船員ID<br>Crew ID</th>
                                            <th>名前<br>Name</th>
                                            <th>生年月日<br>D.O.B</th>
                                            <th>年齢<br>Age</th>
                                            <th>職種<br>Job</th>
                                            <th>旅券番号<br>Passport No.</th>
                                            <th>作用<br>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crew->where('status', 'Stand-by') as $index => $standby)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td><a href="/crew/{{ $standby->subid }}">{{ $standby->subid }}</a></td>

                                                <td>{{ $standby->name }}</td>

                                                <td>{{ $standby->birth }}</td>
                                                <td>{{ \Carbon\Carbon::parse($standby->birth)->diff(\Carbon\Carbon::now())->y }}
                                                </td>
                                                <td>{{ $standby->job->code }}</td>
                                                <td>{{ $standby->passport->no ?? 'PASSPORT NO' }}</td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <a href="{{ route('crew.show', $standby->subid) }}"
                                                            class="btn btn-sm btn-outline-primary"
                                                            target="_blank">View</a>

                                                        <a href="/print/crew/{{ $standby->subid }}"
                                                            class="btn btn-sm btn-outline-success"
                                                            target="_blank">Print</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div id="unstandby" class="tab-pane fade">
                                <table id="" class="table table-bordered datatable">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>番号<br>No.</th>
                                            <th>船員ID<br>Crew ID</th>
                                            <th>名前<br>Name</th>
                                            <th>生年月日<br>D.O.B</th>
                                            <th>年齢<br>Age</th>
                                            <th>職種<br>Job</th>
                                            <th>旅券番号<br>Passport No.</th>
                                            <th>作用<br>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($crew->where('status', 'Unstand-by') as $index => $unstandby)
                                            <tr>
                                                <td scope="row">{{ $index + 1 }}</td>
                                                <td><a href="/crew/{{ $unstandby->subid }}">{{ $unstandby->subid }}</a>
                                                </td>

                                                <td>{{ $unstandby->name }}</td>

                                                <td>{{ $unstandby->birth }}</td>
                                                <td>{{ \Carbon\Carbon::parse($unstandby->birth)->diff(\Carbon\Carbon::now())->y }}
                                                </td>
                                                <td>{{ $unstandby->job->code }}</td>
                                                <td>{{ $unstandby->passport->no ?? 'PASSPORT NO' }}</td>
                                                <td>
                                                    <div class="input-group mb-3">
                                                        <a href="{{ route('crew.show', $unstandby->subid) }}"
                                                            class="btn btn-sm btn-outline-primary"
                                                            target="_blank">View</a>

                                                        <a href="/print/crew/{{ $unstandby->subid }}"
                                                            class="btn btn-sm btn-outline-success"
                                                            target="_blank">Print</a>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>



                    </div>


                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
