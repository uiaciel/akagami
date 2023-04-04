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
                    <span class="input-group-text" id="basic-addon1" style="
    width: 68px;
">Date:</span>
                    <input type="text" class="form-control date" placeholder="yyyy/mm/dd">
                </div>
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class="col-1 p-1 ms-2" style="
    width: 6%;
">
                <label for="" class="ms-1"><small>船名<br>Vessel Name</small></label>

            </div>
            <div class="col-2 me-2 p-1">

                <input type="text" class="form-control" name="subid" value="" placeholder="SHOSHIN MARU 83">

            </div>
            <div class="col-2 p-1" style="
    width: 11%;
">
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
        <!--header-->
        <div class="row">
            <div class="col-4">
                <div class="form-group row mb-0">
                    <label for="" class="col-sm-4">船員ID<br>Crew ID</label>
                    <div class="col-sm-8">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control" name="subid" value="{{ $crew->subid }}">
                            <span class="input-group-text fs-5">{{ $crew->status }}</span>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group row mb-0">
                    <label for="" class="col-sm-5">旅券番号<br>Passport No.</label>
                    <div class="col-sm-7">

                        <select class="form-select" name="passport_id" id="passport">
                            @foreach ($docs->where('type', 'Passport') as $passport)
                                <option value="{{ $passport->id }}">{{ $passport->no }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group row mb-0">
                    <label for="" class="col-sm-3">特記<br>Special
                        Remark</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="specialmark" value="{{ $crew->specialmark }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-group row mb-0">
                    <label class="col-sm-4">名前<br>Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" value="{{ $crew->name }}">

                    </div>
                    <label class="col-sm-4">国籍<br>Nationality</label>
                    <div class="col-sm-8">
                        <select class="form-select" name="nationaly">
                            <option value="{{ $crew->nationaly }}">{{ $crew->nationaly }}
                            </option>
                            @foreach ($nationals as $national)
                                <option value="{{ $national->name }}">{{ $national->name }}
                                </option>
                            @endforeach
                        </select>


                    </div>
                    <label for="" class="col-sm-4">出生地<br>Birth Place</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="place" value="{{ $crew->place }}">
                    </div>
                    <label for="" class="col-sm-4">生年月日<br>Birth Date</label>


                    <div class="col-sm-8">
                        <div class="input-group mb-0">
                            <input type="text" class="form-control date" name="birth" value="{{ $crew->birth }}">
                            <label style="margin-left: 14px;margin-right: 7px;width: 16%;"
                                class="fs-5">年齢<br>Age</label>

                            <span class="input-group-text"
                                style="
    width: 27%;
">{{ \Carbon\Carbon::parse($crew->birth)->diff(\Carbon\Carbon::now())->y }}
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
                            <input type="number" class="form-control" name="height" value="{{ $crew->height }}">
                            <span class="input-group-text fs-5">cm</span>
                            <input type="number" class="form-control" name="weight" value="{{ $crew->weight }}">
                            <span class="input-group-text fs-5">kg</span>
                        </div>


                    </div>
                    <label class="col-sm-4 fs-6">未婚・既婚<br>Marital
                        Status</label>
                    <div class="col-sm-8">
                        <div class="input-group mb-0">
                            <select class="form-select" name="marital">
                                <!--<option value="{{ $crew->marital }}">{{ $crew->marital }}</option>-->
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                            <label style="margin-left: 8px;margin-right: 13px;">子供<br>Child</label>
                            <input type="text" class="form-control" name="child" value="0">
                            <span class="input-group-text">人</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="form-group row mb-0">
                    <label class="col-sm-5">発給日<br>Issued Date</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control date" id="passport_issued" placeholder="yyyy/mm/dd"
                            value="{{ $crew->passport_issued }}">
                    </div>
                    <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="passport_place"
                            value="{{ $crew->passport_place }}">
                    </div>
                    <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control date" id="passport_valid" placeholder="yyyy/mm/dd"
                            value="{{ $crew->passport_valid }}">
                    </div>
                    <label class="col-sm-5 fs-6">船員手帳<br>Seaman Book</label>
                    <div class="col-sm-7">
                        <select class="form-select" id="seaman">
                            @foreach ($docs->where('type', 'Seaman Book') as $seaman)
                                <option value="{{ $seaman->id }}">{{ $seaman->no }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-5">発給日<br>Issued Date</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control date" id="seaman_issued" placeholder="yyyy/mm/dd"
                            value="{{ $crew->seamanbook_issued }}">
                    </div>
                    <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="seaman_entry"
                            value="{{ $crew->seamanbook_place }}">
                    </div>
                    <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control date" id="seaman_valid" placeholder="yyyy/mm/dd"
                            value="{{ $crew->seamanbook_valid }}">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group row mb-0">
                    <label class="col-sm-5">最終経歴<br>Last Vessel</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" value="{{ $lastvessel }}">
                    </div>
                    <label for="" class="col-sm-5">下船日<br>Sign Off</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="signoff" value="{{ $crew->signoff }}"
                            placeholder="ambil dari data">
                    </div><label for="" class="col-sm-5">新基本給<br>New Salary</label>
                    <div class="col-sm-7">
                        <div class="input-group mb-0">
                            <select class="form-select" name="currencysalary"
                                style="
    width: 10%;
    padding: 0 0px 0 13px;
">


                                <option value="{{ $crew->currencysalary }}" style="
    width: 60%;
">
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
                                <option value="Rs">Rs (Pakistani &amp; Sri Lankan Rupee)
                                </option>
                                <option value="SAR">SAR (Saudi Riyal)</option>
                                <option value="AED">AED (UAE Dirham)</option>
                                <option value="BD">BD (Bahrain Dinar)</option>
                                <option value="QR">QR (Qatari Riyal)</option>
                                <option value="¥">¥ (Japanese Yen &amp; Chinese Yuan)</option>
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
                            <input type="text" class="form-control" name="salary" value="2602"
                                style="
    width: 53%;
">
                        </div>

                    </div>
                    <label for="" class="col-sm-5">職種<br>Job</label>
                    <div class="col-sm-7">
                        <select class="form-select" name="job_id">
                            <option value="{{ $crew->job->id }}">{{ $crew->job->code }}
                                ({{ $crew->job->name }})
                            </option>
                            @foreach ($jobs as $job)
                                <option value="{{ $job->id }}">{{ $job->code }}
                                    ({{ $job->name }})
                                </option>
                            @endforeach

                        </select>
                    </div><label for="" class="col-sm-5">足のサイズ<br>Shoes Size</label>
                    <div class="col-sm-7">

                        <select class="form-select" name="shoes">
                            <option value="{{ $crew->shoes }}">{{ $crew->shoes }}</option>
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
                    </div><label for="" class="col-sm-5">手袋<br>Glove Size</label>
                    <div class="col-sm-7">

                        <select class="form-select" name="glove">
                            <option value="{{ $crew->glove }}">{{ $crew->glove }}</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                        </select>
                    </div><label for="" class="col-sm-5">カッパ<br>Kappa Size</label>
                    <div class="col-sm-7">

                        <select class="form-select" name="kappa">
                            <option value="{{ $crew->kappa }}">{{ $crew->kappa }}</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <img id="imgPreview" src="/storage/{{ $crew->photo }}"
                    src="https://komisi-kejaksaan.go.id/komjak/wp-content/uploads/2017/01/no-profile-photo.jpg"
                    alt="..." class="img-thumbnail" style="width: 200px;">
                <div class="mt-2 d-print-none"
                    style="position: absolute;margin-top: -20px !important;width: 180px;margin-left: 10px;">
                    <input class="form-control form-control-sm" name="photo" id="images" type="file">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                {{-- marital status --}}

                <div class="form-group row mb-0">
                    <label class="col-sm-4">入国査証番号<br>Entry Visa No.</label>
                    <div class="col-sm-8">

                        <select class="form-select" id="vissa">
                            @foreach ($docs->where('type', 'Entry Visa') as $vissa)
                                <option value="{{ $vissa->id }}">{{ $vissa->no }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                    <label class="col-sm-4">入国査証<br>Entry Visa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="vissa_entry">

                    </div>

                    <label class="col-sm-4">発給日<br>Issued Date</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control date" id="vissa_issued" placeholder="yyyy/mm/dd">
                    </div>
                    <label class="col-sm-4">有効期限<br>Valid Until</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control date" id="vissa_valid" placeholder="yyyy/mm/dd">
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group row">
                    <label for="" class="col-sm-5" style=" font-size: smaller; ">オレンジブック<br>Orange
                        Book</label>
                    <div class="col-sm-7">
                        <select class="form-select" id="orange">
                            @foreach ($docs->where('type', 'Orange Book') as $orange)
                                <option value="{{ $orange->id }}">{{ $orange->no }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-5">発給日<br>Issued Date</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control date" id="orange_issued" placeholder="yyyy/mm/dd"
                            value="{{ $crew->orangebook_issued }}">
                    </div>
                    <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="orange_entry"
                            value="{{ $crew->orangebook_place }}">
                    </div>
                    <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control date" id="orange_valid" placeholder="yyyy/mm/dd"
                            value="{{ $crew->orangebook_valid }}">
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="form-group row mb-0">
                    <label for="" class="col-sm-3">備考<br>Remark</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="remark" rows="3">{{ $crew->remark }}</textarea>
                    </div>
                    <label for="" class="col-sm-3">免状等<br>License</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="license" value="{{ $crew->license }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <span>{{ \Carbon\Carbon::parse($tahun)->format('Y') }} 年以降の乗船経歴</span>
            <h5>Experience since {{ \Carbon\Carbon::parse($tahun)->format('Y') }}</h5>
            <table class="table tableexp text-nowrap p-0">
                <thead class="table-dark">
                    <tr>
                        <th>船名<br>Vessel Name</th>
                        <th>所属<br>Affiliation</th>
                        <th>乗船日<br>Sign On</th>
                        <th>下船日<br>Sign Off</th>
                        <th>乗船期限（月）<br>Period (Month)</th>
                        <th>基本給<br>Salary</th>
                        <th>ボーナス<br>Bonus</th>
                        <th>職種<br>Job</th>
                        <th>船籍<br>Ship Flag</th>
                        <th>凍結・生<br>Raw Freezing</th>
                        <th>種別<br>Type</th>
                        <th>主漁場<br>F/G</th>
                        <th>トン数<br>Tonnage</th>
                        <th>漁労長<br>F/M</th>
                        <th>寒冷<br>Cold Area</th>
                        <th>下船理由<br>Disembark.<br>Reason</th>
                        <th>評価<br>Grade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($exp as $exp)
                        <tr>
                            <td>{{ $exp->shipname->name }} {{ $exp->maru }} {{ $exp->number }}</td>
                            <td>{{ $exp->affiliation }}</td>
                            <td>{{ $exp->signon }}</td>
                            <td>{{ $exp->signoff }}</td>
                            <td>{{ $exp->periode }}</td>
                            <td>{{ $exp->currencysalary }} {{ $exp->salary }}</td>
                            <td>{{ $exp->currencybonus }} {{ $exp->bonus }}</td>
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
@endsection
