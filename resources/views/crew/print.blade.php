@extends('layouts.print')
@section('content')
    <div class="page">
        <div class="row mb-1">
            <div class="col-6">
                <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01" style=" width: 68px; ">To:</label>
                    <select class="form-select" id="inputGroupSelect01">
                        {{-- @foreach ($kliens as $klien)
                                <option value="{{ $klien->id }}">{{ $klien->nama }}</option>
                            @endforeach --}}
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01"style=" width: 68px; ">From:</label>
                        <select class="form-select" id="inputGroupSelect01">
                            {{-- @foreach ($companys as $company)
                                    <option value="{{ $company->id }}">{{ $company->nama }}</option>
                                @endforeach --}}
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"style=" width: 68px; ">Attn:</span>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1" style=" width: 68px; ">Date:</span>
                    <input type="text" class="form-control date" placeholder="yyyy/mm/dd">
                </div>
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class="col-1 p-1 ms-2" style=" width: 6%; ">
                <label for="" class="ms-1"><small>船名<br>Vessel Name</small></label>
            </div>
            <div class="col-2 me-2 p-1">

                <input type="text" class="form-control" name="subid" value="" placeholder="SHOSHIN MARU 83">

            </div>
            <div class="col-2 p-1" style=" width: 11%; ">
                <small>に対する船員候補者<br>Crew Particular For</small>
            </div>

            <div class="col-1 p-1 me-3">
                <label for="" class="">派遣日<br><small>Embarkation Date</small></label>
            </div>
            <div class="col-1 p-1 me-3">
                <input type="text" class="form-control date me-3" name="subid" value="" placeholder="yyyy/mm/dd">
            </div>
            <div class="col-1 me-3 p-1">
                <label class="">下船予定日<br><small>Estimated Sign Off</small>
                </label>
            </div>
            <div class="col-1 me-3 p-1">
                <input type="text" class="form-control date me-3" name="subid" value="" placeholder="yyyy/mm/dd">
            </div>

            <div class="col-1 me-3 p-1">
                <label class="p-1">派遣港<br><small>Embarkation Port</small>
                </label>
            </div>
            <div class="col-1 p-1" style="
                width: 16.5%;">
                <select class="form-select">
                    @foreach ($ports as $port)
                        <option value="{{ $port->name }}">{{ $port->name }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" class="form-control" name="subid" value="" placeholder="LAS PALMAS"> --}}
            </div>
        </div>
        <div class="row mb-3 ">
            <div class="input-group">
            </div>
        </div>
        <hr>
        @include('crew.content')




    </div>
    <footer></footer>
    <div class="page">
        @include('crew.content')
    </div>
@endsection
