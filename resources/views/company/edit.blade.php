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

                            <h3 class="mb-0  text-white">Companies</h3>

                        </div>

                        <div>

                            {{-- <a href="{{route('order.create')}}" class="btn btn-white">Create New Project</a> --}}

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <div class="row mt-4">

            <div class="col-4">

                <div class="card">

                    <div class="card-header bg-dark">

                        <h5 class="text-white">Edit Company</h5>

                    </div>

                    <div class="card-body">

                        <form action="{{ route('company.update', $companies->id) }}" method="POST">

                            <input type="hidden" name="_method" value="PUT">

                            @csrf

                            <div class="mb-3">

                                <div class="form-group">

                                    <label for="exampleInputEmail1">Company Name</label>

                                    <input type="text" name="nama" value="{{ $companies->nama }}" class="form-control"
                                        id="exampleInputEmail1">

                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>

                        </form>

                    </div>

                </div>

            </div>



            <div class="col-8">

                <div class="card">

                    <div class="card-header bg-dark text-white">

                        <h5 class="text-white">Company List</h5>

                    </div>

                    <div class="card-body">

                        <table class="table table-striped table-bordered">

                            <thead>

                                <tr>

                                    <th scope="col">#</th>

                                    <th scope="col">Company Names</th>

                                    <th scope="col">Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($companys as $index => $company)
                                    <tr>

                                        <th scope="row">{{ $index + 1 }}</th>

                                        <th scope="row">{{ $company->nama }}</th>

                                        <th scope="row">

                                            <a href="{{ route('company.edit', $company->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>

                                            <form onsubmit="return confirm('Are you sure?');"
                                                action="{{ route('company.destroy', $company->id) }}" method="POST">



                                                @csrf

                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                                            </form>

                                        </th>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
