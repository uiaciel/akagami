<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico">
    <link rel="stylesheet" href="/css/themes.css">
    <title>Data Crews</title>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

</head>
<style>
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 10pt "Tahoma";
        color: black;
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .page {
        padding: 5mm;
        margin: 0 0 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .tableFixHead {
        table-layout: fixed;
        border-collapse: collapse;
    }

    .tableFixHead tbody {
        display: block;
        width: 100%;
        overflow: auto;
        height: 140px;
    }

    .tableFixHead thead tr {
        display: block;
    }

    .tableFixHead th,
    .tableFixHead td {
        width: 230px;
    }

    th {
        color: white;
        background: hwb(234deg 0% 45%);
        border: 1px solid white;
    }

    td {
        border: 1px solid black;
    }

    .form-control {
        color: black;
        border: 1px solid hwb(234deg 0% 45%);
    }

    .input-group-text {
        color: black;
        border: 1px solid hwb(234deg 0% 45%);
    }

    .form-select {
        color: black;
        border: 1px solid hwb(234deg 0% 45%);
    }

    @page {
        size: A4 Landscape;
        margin: 0;
    }

    @media print {

        html,
        body {
            width: 297mm;
            height: 210mm;
            font: 8pt "Tahoma";
            color: black;
        }

        ::-webkit-scrollbar {
            display: none;

        }

        .form-control {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .input-group-text {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }

        .form-select {
            color: black;
            border: 1px solid hwb(234deg 0% 45%);
        }
    }
</style>

<body class="bg-light">
    <div class="book">
        <div class="page">
            <div class="row mb-1">
                <div class="col-6">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupSelect01"
                            style="
    width: 68px;
">From:</label>
                        <select class="form-select" id="inputGroupSelect01">
                            @foreach ($kliens as $klien)
                                <option value="{{ $klien->id }}">{{ $klien->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <div class="input-group">
                            <label class="input-group-text"
                                for="inputGroupSelect01"style="
    width: 68px;
">To:</label>
                            <select class="form-select" id="inputGroupSelect01">
                                @foreach ($companys as $company)
                                    <option value="{{ $company->id }}">{{ $company->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"style="
    width: 68px;
">Attn:</span>
                        <input type="text" class="form-control" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1" style="
    width: 68px;
">Date:</span>
                        <input type="text" class="form-control date" placeholder="yyyy/mm/dd">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class="col-2 p-1 ms-2">
                    <label for="" class="ms-1"><small>????????????????????????????????????????????????<br>Crew Particular For</small></label>
                </div>
                <div class="col-2 me-2 p-1">
                    <input type="text" class="form-control" name="subid" value=""
                        placeholder="83 SHOSHIN MARU">
                </div>
                <div class="col-1 p-1 me-3">
                    <label for="" class="">?????????<br><small>Embarkation Date</small></label>
                </div>
                <div class="col-1 p-1 me-3">
                    <input type="text" class="form-control date me-3" name="subid" value=""
                        placeholder="yyyy/mm/dd">
                </div>
                <div class="col-1 me-3 p-1">
                    <label class="">???????????????<br><small>Estimated Sign-Off</small>
                    </label>
                </div>
                <div class="col-1 me-3 p-1">
                    <input type="text" class="form-control date me-3" name="subid" value=""
                        placeholder="yyyy/mm/dd">
                </div>

                <div class="col-1 me-3 p-1">
                    <label class="p-1">?????????<br><small>Embarkation Port</small>
                    </label>
                </div>
                <div class="col-2 p-1">
                    <input type="text" class="form-control" name="subid" value="" placeholder="LAS PALMAS">
                </div>
            </div>
            <div class="row mb-3 ">
                <div class="input-group">
                </div>
            </div>
            <hr>
            <!--header-->
            <div class="row">
                <div class="col-4">
                    <div class="form-group row mb-0">
                        <label for="" class="col-sm-4">??????ID??????<br>Crew ID No.</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="subid" value="{{ $crew->subid }}">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group row mb-0">
                        <label for="" class="col-sm-5">????????????<br>Passport No.</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="passport_id"
                                value="{{ $crew->passport_id }}">
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group row mb-0">
                        <label for="" class="col-sm-3">??????<br>Special Remark</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="specialmark"
                                value="{{ $crew->specialmark }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group row mb-0">
                        <label class="col-sm-4">??????<br>Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" value="{{ $crew->name }}">
                        </div>
                        <label for="" class="col-sm-4">?????????<br>Birth Place</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="place" value="{{ $crew->place }}">
                        </div>
                        <label for="" class="col-sm-4">????????????<br>Birth Date</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="birth" value="{{ $crew->birth }}">
                        </div>
                        <label class="col-sm-4">??????<br>Age</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control"
                                value="{{ \Carbon\Carbon::parse($crew->birth)->diff(\Carbon\Carbon::now())->y }} tahun"
                                disabled>
                        </div>
                        <label for="" class="col-sm-4">??????<br>Religion</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="religion"
                                value="{{ $crew->religion }}">
                        </div>
                        <label class="col-sm-4">??????<br>Height</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="height" value="{{ $crew->height }}">
                        </div>
                        <label for="" class="col-sm-4">??????<br>Weight</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="weight" value="{{ $crew->weight }}">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group row mb-0">
                        <label class="col-sm-5">?????????<br>Issued Date</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="passport_issued"
                                value="{{ $crew->passport_issued }}">
                        </div>
                        <label for="" class="col-sm-5">?????????<br>Issued Place</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="passport_place"
                                value="{{ $crew->passport_place }}">
                        </div>
                        <label for="" class="col-sm-5">????????????<br>Valid Until</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="passport_valid"
                                value="{{ $crew->passport_valid }}">
                        </div>
                        <label class="col-sm-5">????????????<br>Seaman Book</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="seamanbook_id"
                                value="{{ $crew->seamanbook_id }}">
                        </div>
                        <label class="col-sm-5">?????????<br>Issued Date</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="seamanbook_issued"
                                value="{{ $crew->seamanbook_issued }}">
                        </div>
                        <label for="" class="col-sm-5">?????????<br>Issued Place</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="seamanbook_place"
                                value="{{ $crew->seamanbook_place }}">
                        </div>
                        <label for="" class="col-sm-5">????????????<br>Valid Until</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="seamanbook_valid"
                                value="{{ $crew->seamanbook_valid }}">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group row mb-0">
                        <label class="col-sm-5">????????????<br>Last Vessel</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control">
                        </div>
                        <label for="" class="col-sm-5">?????????<br>Sign-Off</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="signoff" value="{{ $crew->signoff }}">
                        </div><label for="" class="col-sm-5">????????????<br>New Salary</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="salary"
                                value="{{ $crew->currencysalary }} {{ $crew->salary }}">
                        </div><label for="" class="col-sm-5">??????<br>Job</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="job"
                                value="{{ $crew->job->code }}">
                        </div><label for="" class="col-sm-5">???????????????<br>Shoes Size</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="shoes" value="{{ $crew->shoes }}">
                        </div><label for="" class="col-sm-5">??????<br>Glove Size</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="glove" value="{{ $crew->glove }}">
                        </div><label for="" class="col-sm-5">?????????<br>Kappa Size</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="kappa" value="{{ $crew->kappa }}">
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-success">Print</button> --}}
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group row mb-0">
                        <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="..."
                            class="img-thumbnail" style="width: 150px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="input-group mb-0">
                        <label class="col-sm-4" style="margin-right: 12px;">???????????????<br>Marital Status</label>
                        <input type="text" class="form-control" name="nationaly" value="Married"
                            style="
    margin-right: 1px;
    width: 92px;
">
                        <label class="form-control-inline"
                            style="
    margin-right: 10px;
    margin-left: 10px;
">??????<br>Child</label>
                        <input type="text" class="form-control" name="marital" value="0">
                        <span class="input-group-text">???</span>
                    </div>
                    <div class="form-group row mb-0">
                        <label class="col-sm-4">????????????<br>Entry Visa</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nationaly"
                                value="{{ $crew->nationaly }}">
                        </div>
                        <label class="col-sm-4">????????????<br>Visa Number</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="visa_id" value="{{ $crew->visa_id }}">
                        </div>
                        <label class="col-sm-4">????????????<br>Valid Until</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="visa_valid"
                                value="{{ $crew->visa_valid }}">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group row">
                        <label for="" class="col-sm-5" style="
    font-size: smaller;
">?????????????????????<br>Orange
                            Book</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="orangebook_id"
                                value="{{ $crew->orangebook_id }}">
                        </div>
                        <label class="col-sm-5">?????????<br>Issued Date</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="orangebook_issued"
                                value="{{ $crew->orangebook_issued }}">
                        </div>
                        <label for="" class="col-sm-5">?????????<br>Issued Place</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="orangebook_place"
                                value="{{ $crew->orangebook_place }}">
                        </div>
                        <label for="" class="col-sm-5">????????????<br>Valid Until</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="orangebook_valid"
                                value="{{ $crew->orangebook_valid }}">
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group row mb-0">
                        <label for="" class="col-sm-3">??????<br>Remark</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="remark" rows="3">{{ $crew->remark }}</textarea>
                        </div>
                        <label for="" class="col-sm-3">?????????<br>License</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="license" value="{{ $crew->license }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <span>{{ \Carbon\Carbon::parse($tahun)->format('Y') }} ????????????????????????</span>
                <h5>Experience since {{ \Carbon\Carbon::parse($tahun)->format('Y') }}</h5>
                <table class="text-center tableFixHead ">
                    <thead>
                        <tr>
                            <th>??????<br>Vessel's Name</th>
                            <th>?????????<br>Sign On</th>
                            <th>?????????<br>Sign Off</th>
                            <th>?????????????????????<br>Period (Month)</th>
                            <th>?????????<br>Salary</th>
                            <th>????????????<br>Bonus</th>
                            <th>??????<br>Job</th>
                            <th>??????<br>Ship Flag</th>
                            <th>????????????<br>Freezer</th>
                            <th>??????<br>Type</th>
                            <th>?????????<br>Fishing Ground</th>
                            <th>?????????<br>Tonnage</th>
                            <th>?????????<br>Fishing Master</th>
                            <th>??????<br>Cold Area</th>
                            <th>????????????<br>Disembark. Reason</th>
                            <th>??????<br>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exp as $exp)
                            <tr>
                                <td>{{ $exp->vesselsname }}</td>
                                <td>{{ $exp->signon }}</td>
                                <td>{{ $exp->signoff }}</td>
                                <td>{{ $exp->periode }}</td>
                                <td>Rp. {{ $exp->salary }}</td>
                                <td>Rp. {{ $exp->bonus }}</td>
                                <td>{{ $exp->job->code }}</td>
                                <td>{{ $exp->shipflag }}</td>
                                <td>{{ $exp->freezer }}</td>
                                <td>{{ $exp->type }}</td>
                                <td>{{ $exp->fishingground }}</td>
                                <td>{{ $exp->tonnage }}</td>
                                <td>{{ $exp->fishingmaster }}</td>
                                <td>{{ $exp->coldarea }}</td>
                                <td>{{ $exp->disembark }}</td>
                                <td>{{ $exp->grade }}</td>
                            </tr>
                            <tr>
                                <td>{{ $exp->vesselsname }}</td>
                                <td>{{ $exp->signon }}</td>
                                <td>{{ $exp->signoff }}</td>
                                <td>{{ $exp->periode }}</td>
                                <td>Rp. {{ $exp->salary }}</td>
                                <td>Rp. {{ $exp->bonus }}</td>
                                <td>{{ $exp->job->code }}</td>
                                <td>{{ $exp->shipflag }}</td>
                                <td>{{ $exp->freezer }}</td>
                                <td>{{ $exp->type }}</td>
                                <td>{{ $exp->fishingground }}</td>
                                <td>{{ $exp->tonnage }}</td>
                                <td>{{ $exp->fishingmaster }}</td>
                                <td>{{ $exp->coldarea }}</td>
                                <td>{{ $exp->disembark }}</td>
                                <td>{{ $exp->grade }}</td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
        <!--pages-->
    </div>
    <script>
        window.print();
    </script>
    <script>
        $(document).ready(function() {
            $(".select2").select2({
                tags: true,
                theme: "bootstrap"
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.date').datepicker({
                format: "yyyy/mm/dd",
            });
        });
    </script>

    <script src="/js/main.js"></script>
</body>

</html>
