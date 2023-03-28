@extends('layouts.crew')
@section('content')
    {{-- <div class="bg-primary pt-10 pb-21"></div> --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    {{ $crew->subid }}
                </div>
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-md-12">
                <div class="d-flex">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a id="active" href="#profiles" class="nav-link active" data-bs-toggle="tab"
                                role="tab">Crew Profiles</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#document" class="nav-link" data-bs-toggle="tab" role="tab">Crew
                                Documents</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#certificates" class="nav-link" data-bs-toggle="tab" role="tab">Crew
                                Certificates</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#medical" class="nav-link" data-bs-toggle="tab" role="tab">Crew
                                Medicals</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#contract" class="nav-link" data-bs-toggle="tab" role="tab">Crew
                                Contracts</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#contact" class="nav-link" data-bs-toggle="tab" role="tab">Crew
                                Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#photo" class="nav-link" data-bs-toggle="tab" role="tab">Crew
                                Photos</a>
                        </li>


                    </ul>
                </div>

                <div class="card tab-content">
                    <div id="profiles" class="tab-pane fade active show">
                        <form onsubmit="return confirm('Are you sure?');"
                            action="{{ route('profile.update', $crew->id) }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-lg-4">
                                        <div class="form-group row mb-0">
                                            <label for="" class="col-md-4">船員ID<br>Crew ID</label>
                                            <div class="col-md-8">
                                                <div class="input-group mb-0">
                                                    <input type="text" class="form-control" name="subid"
                                                        value="{{ $crew->subid }}">
                                                    <span class="input-group-text fs-5">{{ $crew->status }}</span>

                                                </div>


                                            </div>


                                            <label class="col-sm-4">名前<br>Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $crew->name }}">

                                            </div>
                                            <label class="col-sm-4">国籍<br>Nationality</label>
                                            <div class="col-sm-8">
                                                <select class="form-select" name="nationaly">
                                                    {{-- <option value="{{ $crew->nationaly }}">{{ $crew->nationaly }}
                                                        </option>
                                                        @foreach ($nationals as $national)
                                                            <option value="{{ $national->name }}">{{ $national->name }}
                                                            </option>
                                                        @endforeach --}}
                                                </select>


                                            </div>
                                            <label for="" class="col-sm-4">出生地<br>Birth Place</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="place"
                                                    value="{{ $crew->place }}">
                                            </div>
                                            <label for="" class="col-sm-4">生年月日<br>Birth Date</label>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-0">
                                                    <input type="text" class="form-control date" name="birth"
                                                        value="{{ $crew->birth }}">
                                                    <label style="margin-left: 14px;margin-right: 7px;width: 16%;"
                                                        class="fs-5">年齢<br>Age</label>

                                                    <span class="input-group-text"
                                                        style=" width: 27%; ">{{ \Carbon\Carbon::parse($crew->birth)->diff(\Carbon\Carbon::now())->y }}
                                                        歳</span>
                                                </div>

                                            </div>

                                            <label for="" class="col-sm-4">宗教<br>Religion</label>
                                            <div class="col-sm-8">
                                                <!--<input type="text" class="form-control" name="religion" value="{{ $crew->religion }}">-->
                                                <select class="form-select" name="religion">
                                                    <option value="{{ $crew->religion }}">{{ $crew->religion }}
                                                    </option>
                                                    <option value="Zoroaster">Zoroaster</option>
                                                    <option value="Judaism">Judaism</option>
                                                    <option value="Orthodoxy Christianity">Orthodoxy Christianity
                                                    </option>
                                                    <option value="Catholic Christianity">Catholic Christianity
                                                    </option>
                                                    <option value="Protestant Christianity">Protestant Christianity
                                                    </option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Baha'i">Baha'i</option>
                                                    <option value="Hinduism">Hinduism</option>
                                                    <option value="Jainism">Jainism</option>
                                                    <option value="Buddhism">Buddhism</option>
                                                    <option value="Sikhism">Sikhism</option>
                                                    <option value="Taoism">Taoism</option>
                                                    <option value="Confucianism">Confucianism</option>
                                                    <option value="Shinto">Shinto</option>
                                                </select>
                                            </div>

                                            <label class="col-sm-4">身長/体重<br>Height/Weight</label>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-0">
                                                    <input type="number" class="form-control" name="height"
                                                        value="{{ $crew->height }}">
                                                    <span class="input-group-text fs-5">Cm</span>
                                                    <input type="number" class="form-control" name="weight"
                                                        value="{{ $crew->weight }}">
                                                    <span class="input-group-text fs-5">Kg</span>
                                                </div>


                                            </div>
                                            <label class="col-sm-4 fs-6">未婚・既婚<br>Marital
                                                Status</label>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-0">
                                                    <select class="form-select" name="marital">
                                                        <!--<option value="{{ $crew->marital }}">{{ $crew->marital }}</option>-->
                                                        <option value="Married">Married</option>
                                                        <option value="Single">Single</option>
                                                    </select>
                                                    <label style="margin-left: 8px;margin-right: 13px;">子供<br>Child</label>
                                                    <input type="text" class="form-control" name="child"
                                                        value="0">
                                                    <span class="input-group-text">人</span>
                                                </div>
                                            </div>

                                            <label class="col-sm-4">入国査証番号<br>Entry Visa No.</label>
                                            <div class="col-sm-8">

                                                <select class="form-select" id="vissa" name="visa_id">
                                                    {{-- @foreach ($docs->where('type', 'Entry Visa') as $vissa)
                                                            <option value="{{ $vissa->id }}">{{ $vissa->no }}
                                                            </option>
                                                        @endforeach --}}
                                                </select>

                                            </div>
                                            <label class="col-sm-4">入国査証<br>Entry Visa</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="vissa_entry">

                                            </div>

                                            <label class="col-sm-4">発給日<br>Issued Date</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control date" id="vissa_issued"
                                                    placeholder="yyyy/mm/dd">
                                            </div>
                                            <label class="col-sm-4">有効期限<br>Valid Until</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control date" id="vissa_valid"
                                                    placeholder="yyyy/mm/dd">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group row mb-0">
                                            <label for="" class="col-sm-5">旅券番号<br>Passport No.</label>
                                            <div class="col-sm-7">

                                                <select class="form-select" name="passport_id" id="passport">
                                                    {{-- @foreach ($docs->where('type', 'Passport') as $passport)
                                                            <option value="{{ $passport->id }}">{{ $passport->no }}
                                                            </option>
                                                        @endforeach --}}
                                                </select>
                                            </div>

                                            <label class="col-sm-5">発給日<br>Issued Date</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control date" id="passport_issued"
                                                    placeholder="yyyy/mm/dd" value="{{ $crew->passport_issued }}">
                                            </div>
                                            <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="passport_place"
                                                    value="{{ $crew->passport_place }}">
                                            </div>
                                            <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control date" id="passport_valid"
                                                    placeholder="yyyy/mm/dd" value="{{ $crew->passport_valid }}">
                                            </div>
                                            <label class="col-sm-5 fs-6">船員手帳<br>Seaman Book</label>
                                            <div class="col-sm-7">
                                                <select class="form-select" id="seaman" name="seamanbook_id">
                                                    {{-- @foreach ($docs->where('type', 'Seaman Book') as $seaman)
                                                            <option value="{{ $seaman->id }}">{{ $seaman->no }}
                                                            </option>
                                                        @endforeach --}}
                                                </select>
                                            </div>
                                            <label class="col-sm-5">発給日<br>Issued Date</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control date" id="seaman_issued"
                                                    placeholder="yyyy/mm/dd" value="{{ $crew->seamanbook_issued }}">
                                            </div>
                                            <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="seaman_entry"
                                                    value="{{ $crew->seamanbook_place }}">
                                            </div>
                                            <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control date" id="seaman_valid"
                                                    placeholder="yyyy/mm/dd" value="{{ $crew->seamanbook_valid }}">
                                            </div>
                                            <label for="" class="col-sm-5"
                                                style=" font-size: smaller; ">オレンジブック<br>Orange Book</label>
                                            <div class="col-sm-7">
                                                <select class="form-select" id="orange" name="orangebook_id">
                                                    {{-- @foreach ($docs->where('type', 'Orange Book') as $orange)
                                                            <option value="{{ $orange->id }}">{{ $orange->no }}
                                                            </option>
                                                        @endforeach --}}
                                                </select>
                                            </div>
                                            <label class="col-sm-5">発給日<br>Issued Date</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control date" id="orange_issued"
                                                    placeholder="yyyy/mm/dd" value="{{ $crew->orangebook_issued }}">
                                            </div>
                                            <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" id="orange_entry"
                                                    value="{{ $crew->orangebook_place }}">
                                            </div>
                                            <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control date" id="orange_valid"
                                                    placeholder="yyyy/mm/dd" value="{{ $crew->orangebook_valid }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group row mb-0">
                                            <label for="" class="col-sm-3" style="font-size: 13px;">特記<br>Special
                                                Remark</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="specialmark"
                                                    value="{{ $crew->specialmark }}">
                                            </div>
                                            <div class="form-group row mb-1">
                                                <div class="col-lg-10 row mt-1">
                                                    <label class="col-sm-4 me-1">最終経歴<br>Last Vessel</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control">

                                                    </div>
                                                    <label for="" class="col-sm-4 me-1">下船日<br>Sign Off</label>
                                                    <div class="col-sm-7">
                                                        <input type="text" class="form-control" name="signoff"
                                                            value="{{ $crew->signoff }}">
                                                    </div><label for="" class="col-sm-4 me-1">新基本給<br>New
                                                        Salary</label>
                                                    <div class="col-sm-7">
                                                        <div class="input-group mb-0">
                                                            <select class="form-control-inline" id="inputGroupSelect02"
                                                                name="currencysalary"
                                                                style="margin-right: 1px;width: 40px;border: 1px solid hwb(234deg 0% 45%);border-radius: 0.375rem;">
                                                                <option value="{{ $crew->currencysalary }}">
                                                                    {{ $crew->currencysalary }}</option>
                                                                <option value="Rp">Rp (Indonesian Rupiah)</option>
                                                                <option value="RM">RM (Malaysian Ringgit)</option>
                                                                <option value="B$">B$ (Brunei Dollar)</option>
                                                                <option value="S$">S$ (Singapore Dollar)</option>
                                                                <option value="₱">₱ (Philippine Peso)</option>
                                                                <option value="฿">฿ (Thai Baht)</option>
                                                                <option value="៛">៛ (Cambodian Riel)</option>
                                                                <option value="₫">₫ (Vietnamese Dong)</option>
                                                                <option value="₭">₭ (Lao Kip)</option>
                                                                <option value="Ks">Ks (Myanmar Kyat)</option>
                                                                <option value="৳">৳ (Bangladeshi Taka)</option>
                                                                <option value="₹">₹ (Indian Rupee)</option>
                                                                <option value="Rs">Rs (Pakistani & Sri Lankan Rupee)
                                                                </option>
                                                                <option value="SAR">SAR (Saudi Riyal)</option>
                                                                <option value="AED">AED (UAE Dirham)</option>
                                                                <option value="BD">BD (Bahrain Dinar)</option>
                                                                <option value="QR">QR (Qatari Riyal)</option>
                                                                <option value="¥">¥ (Japanese Yen & Chinese Yuan)
                                                                </option>
                                                                <option value="₩">₩ (Korean Won)</option>
                                                                <option value="₽">₽ (Russian Ruble)</option>
                                                                <option value="₴">₴ (Ukrainian Hrynia)</option>
                                                                <option value="US$">US$ (US Dollar)</option>
                                                                <option value="CA$">CA$ (Canadian Dollar)</option>
                                                                <option value="AU$">AU$ (Australian Dollar)</option>
                                                                <option value="NZ$">NZ$ (New Zealand Dollar)</option>
                                                                <option value="HK$">HK$ (Hong Kong Dollar)</option>
                                                                <option value="€">€ (Euro)</option>
                                                                <option value="Fr">Fr (Swiss Franc)</option>
                                                                <option value="£">£ (British Pound Sterling)</option>
                                                            </select>
                                                            <input type="text" class="form-control" name="salary"
                                                                value="{{ $crew->salary }}">
                                                        </div>
                                                    </div>
                                                    <label for="" class="col-sm-4 me-1">職種<br>Job</label>
                                                    <div class="col-sm-7">
                                                        <select class="form-select" name="job_id">
                                                            {{-- <option value="{{ $crew->job->id }}">{{ $crew->job->code }}
                                                            ({{ $crew->job->name }})
                                                        </option> --}}
                                                            {{-- @foreach ($jobs as $job)
                                                            <option value="{{ $job->id }}">{{ $job->code }}
                                                                ({{ $job->name }})
                                                            </option>
                                                        @endforeach --}}

                                                        </select>
                                                    </div><label for="" class="col-sm-4 me-1">足のサイズ<br>Shoes
                                                        Size</label>
                                                    <div class="col-sm-7">

                                                        <select class="form-select" name="shoes">
                                                            <option value="{{ $crew->shoes }}">{{ $crew->shoes }}
                                                            </option>
                                                            <option value="EU35/JP21.5 Cm">EU35/JP21.5 Cm</option>
                                                            <option value="EU36/JP22.5 Cm">EU36/JP22.5 Cm</option>
                                                            <option value="EU37/JP23 Cm">EU37/JP23 Cm</option>
                                                            <option value="EU38/JP24 Cm">EU38/JP24 Cm</option>
                                                            <option value="EU39/JP25 Cm">EU39/JP25 Cm</option>
                                                            <option value="EU40/JP25.5 Cm">EU40/JP25.5 Cm</option>
                                                            <option value="EU41/JP26 Cm">EU41/JP26 Cm</option>
                                                            <option value="EU42/JP26.5 Cm">EU42/JP26.5 Cm</option>
                                                            <option value="EU43/JP27.5 Cm">EU43/JP27.5 Cm</option>
                                                            <option value="EU44/JP28.5 Cm">EU44/JP28.5 Cm</option>
                                                            <option value="EU45/JP29.5 Cm">EU45/JP29.5 Cm</option>

                                                        </select>
                                                    </div><label for="" class="col-sm-4 me-1">手袋<br>Glove
                                                        Size</label>
                                                    <div class="col-sm-7">

                                                        <select class="form-select" name="glove">
                                                            <option value="{{ $crew->glove }}">{{ $crew->glove }}
                                                            </option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                            <option value="XXXL">XXXL</option>
                                                        </select>
                                                    </div><label for="" class="col-sm-4 me-1">カッパ<br>Kappa
                                                        Size</label>
                                                    <div class="col-sm-7">

                                                        <select class="form-select" name="kappa">
                                                            <option value="{{ $crew->kappa }}">{{ $crew->kappa }}
                                                            </option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                            <option value="XXXL">XXXL</option>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-lg-2">
                                                    <img src="https://i.pinimg.com/550x/ea/1a/b7/ea1ab73a89a61d9d3a0e30d7a314bbf5.jpg"
                                                        class="img-fluid">
                                                </div>
                                            </div>



                                            <label for="" class="col-sm-3">備考<br>Remark</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="remark" rows="3">{{ $crew->remark }}</textarea>
                                            </div>
                                            <label for="" class="col-sm-3">免状等<br>License</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="license"
                                                    value="{{ $crew->license }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-4 col-sm-12">
                                                                                                                <div class="form-group row mb-0">
                                                                                                                    <label for="" class="col-md-4">船員ID<br>Crew ID</label>
                                                                                                                    <div class="col-md-8">
                                                                                                                        <div class="input-group mb-0">
                                                                                                                            <input type="text" class="form-control" name="subid"
                                                                                                                                value="{{ $crew->subid }}">
                                                                                                                            <span class="input-group-text fs-5">{{ $crew->status }}</span>

                                                                                                                        </div>


                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-3">
                                                                                                                <div class="form-group row mb-0">
                                                                                                                    <label for="" class="col-sm-5">旅券番号<br>Passport No.</label>
                                                                                                                    <div class="col-sm-7">

                                                                                                                        {{-- <select class="form-select" name="passport_id" id="passport">
                                                        @foreach ($docs->where('type', 'Passport') as $passport)
                                                            <option value="{{ $passport->id }}">{{ $passport->no }}
                                                            </option>
                                                        @endforeach
                                                    </select> --}}
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-5">
                                                                                                                <div class="form-group row mb-0">
                                                                                                                    <label for="" class="col-sm-3" style="font-size: 13px;">特記<br>Special
                                                                                                                        Remark</label>
                                                                                                                    <div class="col-sm-9">
                                                                                                                        <input type="text" class="form-control" name="specialmark"
                                                                                                                            value="{{ $crew->specialmark }}">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-4">

                                                                                                            </div>
                                                                                                            <div class="col-3">

                                                                                                            </div>
                                                                                                            <div class="col-3">
                                                                                                                <div class="form-group row mb-0">

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-2">
                                                                                                                <img id="imgPreview" src="/storage/{{ $crew->photo }}" src="/img/foto-4x6.png"
                                                                                                                    alt="..." class="img-thumbnail" style="width: 200px;">
                                                                                                                <div class="mt-2"
                                                                                                                    style="position: absolute;margin-top: -20px !important;width: 180px;margin-left: 10px;">
                                                                                                                    <input class="form-control form-control-sm" name="photo" id="images"
                                                                                                                        type="file">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-4">


                                                                                                                <div class="form-group row mb-0">

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-3">
                                                                                                                <div class="form-group row">

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-5">
                                                                                                                <div class="form-group row mb-0">

                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="d-grid gap-2 mt-6">

                                                                                                            <button class="btn btn-primary" type="submit">Update</button>
                                                                                                        </div>
                                                                                                    -->

                                <div class="d-grid gap-2 mt-6">

                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
