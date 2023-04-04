@extends('layouts.crew')
@section('content')
    {{-- <div class="bg-primary pt-10 pb-21"></div> --}}

    <div class="container-fluid d-print-block">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    {{ $crew->subid }}
                </div>

            </div>
        </div>


        <div class="collapse" id="addExp">
            <div class="card card-body">
                <form action="{{ route('exp.store') }}" method="POST">
                    @csrf

                    <div class="row mt-4">
                        <div class="col-md-4">


                            <div class="mb-3" hidden>
                                <label for="crew_id" class="form-label">crew_id</label>
                                <input type="text" class="form-control" name="crew_id" value="{{ $crew->id }}">
                            </div>

                            <div class="mb-3">
                                <label for="crew_id" class="form-label">船名 | Vessel Name</label>
                                <div class="input-group">
                                    <select class="form-select select2 w-100" data-placeholder="--SELECT--"
                                        name="vesselsname">
                                        <option></option>
                                        @foreach ($shipnames as $shipname)
                                            <option value="{{ $shipname->id }}">
                                                {{ $shipname->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <select class="form-select w-30" name="maru">
                                        <option value="Maru">Maru</option>
                                        <option value="">Non Maru</option>
                                    </select>

                                    <input type="number" max="10000" min="0" class="form-control" name="number">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="crew_id" class="form-label">所属 | Affiliation</label>
                                <select class="form-select" name="affiliation">
                                    <option>--SELECT--</option>
                                    <option value="AM">AM (Aomori)</option>
                                    <option value="CB">CB (Chiba)</option>
                                    <option value="FS">FS (Fukushima)</option>
                                    <option value="HK">HK (Hokkaido)</option>
                                    <option value="IG">IG (Ibaraki)</option>
                                    <option value="IT">IT (Iwate)</option>
                                    <option value="KG">KG (Kagoshima)</option>
                                    <option value="KN">KN (Kanagawa)</option>
                                    <option value="KO">KO (Kochi)</option>
                                    <option value="ME">ME (Mie)</option>
                                    <option value="MGN">MGN (Miyagi North)</option>
                                    <option value="MGE">MGE (Miyagi East)</option>
                                    <option value="MGS">MGS (Miyagi South)</option>
                                    <option value="NS">NS (Nagasaki)</option>
                                    <option value="SO">SO (Shizuoka)</option>
                                    <option value="TK">TK (Tokyo)</option>
                                    <option value="TYツナ">TYツナ (Toshin Tuna)</option>
                                    <option value="TY">TY (Toshin)</option>
                                    <option value="TYM">TYM (Toyama)</option>
                                    <option value="WK">WK (Wakayama)</option>
                                    <option value="OK">OK (Okinawa)</option>
                                    <option value="MY">MY (Miyazaki)</option>
                                    <option value="XYZ">XYZ (Others)</option>


                                </select>

                            </div>

                            <div class="mb-3">
                                <label for="crew_id" class="form-label">乗船日 | Sign On</label>
                                <input type="text" class="form-control date" placeholder="yyyy/mm/dd/" name="signon">
                            </div>

                            <!--<div class="mb-3">-->
                            <!--  <label for="crew_id" class="form-label">乗船期限（月） | Period (Month)</label>-->
                            <!--  <input type="text" class="form-control" name="periode" >-->
                            <!--</div>-->

                            <div class="mb-3">
                                <label for="crew_id" class="form-label">下船日 | Sign Off</label>
                                <input type="text" class="form-control date" placeholder="yyyy/mm/dd/" name="signoff">
                            </div>

                            <div class="mb-3">
                                <label for="crew_id" class="form-label">基本給 | Salary</label>
                                <div class="input-group">
                                    <select class="form-select" name="currencysalary" id="inputGroupSelect02">
                                        <option value="{{ $crew->currencysalary }}">
                                            {{ $crew->currencysalary }}
                                        </option>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->symbol }}">
                                                {{ $currency->name }}</option>
                                        @endforeach
                                        {{-- <option value="Rp">Rp (Indonesian Rupiah)</option>
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
                                                        <option value="£">£ (British Pound Sterling)</option> --}}
                                    </select>
                                    <input type="number" class="form-control" name="salary">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="crew_id" class="form-label">ボーナス | Bonus</label>
                                <div class="input-group">
                                    <select class="form-select" name="currencybonus" id="inputGroupSelect02">
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
                                    <input type="number" class="form-control" name="bonus">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">職種 | Job</label>
                                <select class="form-control" name="job">
                                    <option>--SELECT--</option>

                                    @foreach ($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->code }}
                                            ({{ $job->name }})
                                        </option>
                                    @endforeach


                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">船籍 | Ship Flag</label>
                                <select class="form-control" name="shipflag">
                                    <option>--SELECT--</option>
                                    <option value="IDN">IDN (Indonesia)</option>
                                    <option value="MLY">MLY (Malaysia)</option>
                                    <option value="SIN">SIN (Singapore)</option>
                                    <option value="JPN">JPN (Japan)</option>
                                    <option value="KOR">KOR (Korea)</option>
                                    <option value="TWN">TWN (Taiwan)</option>
                                    <option value="CHI">CHI (China)</option>
                                    <option value="IND">IND (India)</option>
                                    <option value="PAK">PAK (Pakistan)</option>
                                    <option value="ARB">ARB (Saudi Arabia)</option>
                                    <option value="AUS">AUS (Australia)</option>
                                    <option value="NZL">NZL (New Zealand)</option>
                                    <option value="UKE">UKE (UK/England)</option>
                                    <option value="USA">USA (USA/America)</option>
                                    <option value="RUS">RUS (Rusia)</option>
                                    <option value="SPN">SPN (Spain)</option>
                                    <option value="POR">POR (Portugal)</option>
                                    <option value="MLT">MLT (Malta)</option>
                                    <option value="HND">HND (Honduras)</option>
                                    <option value="PNM">PNM (Panama)</option>
                                    <option value="FJI">FJI (Fiji)</option>
                                    <option value="VAN">VAN (Vanuatu)</option>
                                    <option value="PLY">PLY (Polynesia)</option>
                                    <option value="MCR">MCR (Micronesia)</option>
                                    <option value="XYZ">XYZ (Others)</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">凍結・生 | Raw
                                    Freezing</label>

                                <select class="form-control" name="freezer">
                                    <option>--SELECT--</option>
                                    <option value="FRZ">FRZ (Frozen Fish)</option>
                                    <option value="FF">FF (Fresh FIsh)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">種別 | Type</label>
                                <select class="form-control" name="type">
                                    <option>--SELECT--</option>
                                    <option value="LL">LL (Longline)</option>
                                    <option value="TRW">TRW (Trawl)</option>
                                    <option value="PS">PS (Purse Seine)</option>
                                    <option value="PL">PL (Pole & Line)</option>
                                    <option value="JG">JG (Jigger)</option>
                                    <option value="FC">FC (Fishing Carrier)</option>
                                    <option value="FRV">FRV (Fishery Research Vessel)</option>
                                    <option value="FTV">FTV (Fishery Training Vessel)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">主漁場 | Fishing
                                    Ground</label>
                                <select class="form-control" name="fishingground">
                                    <option>--SELECT--</option>
                                    <option value="C">C (Off Las Palmas)</option>
                                    <option value="D">D (Off New Zealand)</option>
                                    <option value="E">E (Japan)</option>
                                    <option value="F">F (Tasmania)</option>
                                    <option value="G">G (Peru)</option>
                                    <option value="H">H (Hawaii)</option>
                                    <option value="I">I (Indian)</option>
                                    <option value="J">J (Jawa)</option>
                                    <option value="K">K (Cape Town)</option>
                                    <option value="O">O (Noumea)</option>
                                    <option value="V">V (South Tuna)</option>
                                    <option value="W">W (Canada/Iceland)</option>
                                    <option value="W">X (Others)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">トン数 | Tonnage</label>
                                <input type="number" class="form-control" name="tonnage">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">漁労長 | Fishing
                                    Master</label>
                                <select class="form-control" name="fishingmaster">
                                    <option>--SELECT--</option>
                                    <option value="IDN">IDN (Indonesia)</option>
                                    <option value="MLY">MLY (Malaysia)</option>
                                    <option value="SIN">SIN (Singapore)</option>
                                    <option value="JPN">JPN (Japan)</option>
                                    <option value="KOR">KOR (Korea)</option>
                                    <option value="TWN">TWN (Taiwan)</option>
                                    <option value="CHI">CHI (China)</option>
                                    <option value="IND">IND (India)</option>
                                    <option value="PAK">PAK (Pakistan)</option>
                                    <option value="ARB">ARB (Saudi Arabia)</option>
                                    <option value="AUS">AUS (Australia)</option>
                                    <option value="NZL">NZL (New Zealand)</option>
                                    <option value="UKE">UKE (UK/England)</option>
                                    <option value="USA">USA (USA/America)</option>
                                    <option value="RUS">RUS (Rusia)</option>
                                    <option value="SPN">SPN (Spain)</option>
                                    <option value="POR">POR (Portugal)</option>
                                    <option value="MLT">MLT (Malta)</option>
                                    <option value="HND">HND (Honduras)</option>
                                    <option value="PNM">PNM (Panama)</option>
                                    <option value="FJI">FJI (Fiji)</option>
                                    <option value="VAN">VAN (Vanuatu)</option>
                                    <option value="PLY">PLY (Polynesia)</option>
                                    <option value="MCR">MCR (Micronesia)</option>
                                    <option value="XYZ">XYZ (Others)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">寒冷 | Cold Area</label>

                                <select class="form-control" name="coldarea">
                                    <option>--SELECT--</option>
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">下船理由 | Disembark.
                                    Reason</label>

                                <select class="form-control" name="disembark">
                                    <option>--SELECT--</option>
                                    <option value="Y">Y (Finished/Completed)</option>
                                    <option value="N">N (Going Ashore Midway)</option>
                                    <option value="ND">ND (Caused by Sickness)</option>
                                    <option value="NI">NI (Caused by Injury)</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="crew_id" class="form-label">評価 | Grade</label>
                                <input type="text" class="form-control" name="grade">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
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
                            <a id="tab-B" href="#document" class="nav-link" data-bs-toggle="tab"
                                role="tab">Crew
                                Documents</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#certificates" class="nav-link" data-bs-toggle="tab"
                                role="tab">Crew
                                Certificates</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#medical" class="nav-link" data-bs-toggle="tab" role="tab">Crew
                                Medicals</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#contract" class="nav-link" data-bs-toggle="tab"
                                role="tab">Crew
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
                        <div class="card-body" id="printini">
                            <form onsubmit="return confirm('Are you sure?');"
                                action="{{ route('crew.update', $crew->id) }}" enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')


                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group row mb-0">
                                            <label for="" class="col-sm-4">船員ID<br>Crew ID</label>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-0">
                                                    <input type="text" class="form-control" name="subid"
                                                        value="{{ $crew->subid }}">
                                                    <span class="input-group-text fs-5">{{ $crew->status }}</span>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
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
                                    <div class="col-lg-5 col-md-12">
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
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group row mb-0">
                                            <label class="col-sm-4">名前<br>Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name"
                                                    value="{{ $crew->name }}">

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

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="form-group row mb-0">
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
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <div class="form-group row mb-0">
                                            <label class="col-sm-5">最終経歴<br>Last Vessel</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" value="{{ $lastvessel }}">

                                            </div>
                                            <label for="" class="col-sm-5">下船日<br>Sign Off</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="signoff"
                                                    value="{{ $crew->signoff }}">
                                            </div><label for="" class="col-sm-5">新基本給<br>New Salary</label>
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
                                                        <option value="¥">¥ (Japanese Yen & Chinese Yuan)</option>
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
                                    <div class="col-lg-2 col-md-12 mt-3 mb-3">
                                        <img id="imgPreview"
                                            @if (!$crew->photo) src="https://komisi-kejaksaan.go.id/komjak/wp-content/uploads/2017/01/no-profile-photo.jpg"
                                        @else
                                            src="/storage/{{ $crew->photo }}" @endif
                                            alt="..." class="img-thumbnail" style="width: 200px;">
                                        <div class="mt-2"
                                            style="position: absolute;margin-top: -20px !important;width: 180px;margin-left: 10px;">
                                            <input class="form-control form-control-sm" name="photo" id="images"
                                                type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        {{-- marital status --}}

                                        <div class="form-group row mb-0">
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
                                    <div class="col-lg-3 col-md-12">
                                        <div class="form-group row">
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
                                    <div class="col-lg-5 col-md-12">
                                        <div class="form-group row mb-0">
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
                                        <div class="text-end mt-1">

                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </div>
                                    </div>




                            </form>

                            <div class="mt-4">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <span>{{ \Carbon\Carbon::parse($tahun)->format('Y') }} 年以降の乗船経歴</span><br />
                                        <h5>Experience since {{ \Carbon\Carbon::parse($tahun)->format('Y') }}</h5>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#addExp" aria-expanded="false"
                                            aria-controls="collapseExample">
                                            Add Exp
                                        </button>
                                    </div>
                                </div>
                                <style>
                                    #tableexp {
                                        width: 100%;
                                    }

                                    #tableexp tr,
                                    #tableexp th,
                                    #tableexp td {
                                        border: 1px solid;
                                        text-align: center;
                                        font-size: 9px;
                                        padding: 5px;
                                    }
                                </style>
                                <table id="tableexp">
                                    <thead>
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
                                                <td>{{ $exp->shipname->name }}
                                                    {{ $exp->maru }} {{ $exp->number }}</td>
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
                                <!-- Button trigger modal -->

                                {{-- <button class="btn btn-primary btn-sm mt-3" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Add Experience
                                    </button> --}}
                            </div>
                        </div>




                    </div>

                </div>

                @include('crew.certificate')
                @include('crew.medical')
                @include('crew.contract')
                @include('crew.document')
                @include('crew.contact')
            </div>
        </div>

    </div>
@endsection
