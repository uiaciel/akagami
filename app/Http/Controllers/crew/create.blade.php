@extends('layouts.main-nav')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">Add New Crew</h3>
                        </div>
                        <div>
                            {{-- <a href="{{route('order.create')}}" class="btn btn-white">Create New Project</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <h4 class="mb-0">Crew Profiles</h4>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <!-- card body  -->
                    <div class="card-body">

                        <form action="{{ route('crew.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group row mb-0">
                                        <label for="" class="col-sm-4">船員ID<br>Crew ID</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="subid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row mb-0">
                                        <label for="" class="col-sm-5">旅券番号<br>Passport No.</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group row mb-0">
                                        <label for="" class="col-sm-3" style="font-size: 13px;">特記<br>Special
                                            Remark</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="specialmark">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group row mb-0">
                                        <label class="col-sm-4">名前<br>Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <label class="col-sm-4">国籍<br>Nationality</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" name="nationaly">
                                                        
                                                        @foreach ($nationals as $national)
                                                            <option value="{{ $national->name }}">{{ $national->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>


                                                </div>
                                        <label for="" class="col-sm-4">生年月日<br>Birth Place</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="place">
                                        </div>
                                        <label for="" class="col-sm-4">生年月日<br>Birth Date</label>
                                                <div class="col-sm-8">
                                                    
                                                    <div class="input-group mb-0">
                                                        <input type="text" class="form-control date" name="birth">
                                                        <label style="margin-left: 14px;margin-right: 7px;width: 16%;"
                                                            class="fs-5">年齢<br>Age</label>

                                                        <span class="input-group-text" style=" width: 27%; ">___歳</span> </div>

                                                </div>
                                        <label for="" class="col-sm-4">宗教<br>Religion</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" name="religion">
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
                                                <input type="number" class="form-control" name="height">
                                                <span class="input-group-text fs-5">Cm</span>
                                                <input type="number" class="form-control" name="weight">
                                                <span class="input-group-text fs-5">Kg</span>
                                            </div>


                                        </div>
                                        <label class="col-sm-4 fs-6">未婚・既婚<br>Marital
                                            Status</label>
                                        <div class="col-sm-8">
                                            <div class="input-group mb-0">
                                                <select class="form-select" name="marital">
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
                                            <input type="text" class="form-control date" disabled>
                                        </div>
                                        <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                        <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control date" disabled>
                                        </div>
                                        <label class="col-sm-5 fs-6">船員手帳<br>Seaman Book</label>
                                        <div class="col-sm-7">
                                            <select class="form-select" disabled>

                                            </select>
                                        </div>
                                        <label class="col-sm-5">発給日<br>Issued Date</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control date" disabled>
                                        </div>
                                        <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                        <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control date" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row mb-0">
                                        <label class="col-sm-5">最終経歴<br>Last Vessel</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="from Experience" disabled>
                                        </div>
                                        <label for="" class="col-sm-5">下船日<br>Sign Off</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="signoff"
                                                placeholder="from Experience" disabled>
                                        </div><label for="" class="col-sm-5">新基本給<br>New Salary</label>
                                        <div class="col-sm-7">
                                            <div class="input-group mb-0">
                                                <select class="form-control-inline" id="inputGroupSelect02"
                                                    name="currencysalary"
                                                    style="margin-right: 1px;width: 40px;border: 1px solid hwb(234deg 0% 45%);border-radius: 0.375rem;">

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
                                                <input type="text" class="form-control" name="salary">
                                            </div>
                                        </div>
                                        <label for="" class="col-sm-5">職種<br>Job</label>
                                        <div class="col-sm-7">
                                            <select class="form-select" name="job_id">

                                                @foreach ($jobs as $job)
                                                    <option value="{{ $job->id }}">{{ $job->code }}
                                                        ({{ $job->name }})
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div><label for="" class="col-sm-5">足のサイズ<br>Shoes Size</label>
                                        <div class="col-sm-7">

                                            <select class="form-select" name="shoes">
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
                                    <img id="imgPreview" src="/img/foto-4x6.png" alt="..." class="img-thumbnail"
                                        style="width: 200px;">
                                    <div class="mt-2"
                                        style="position: absolute;margin-top: -20px !important;width: 180px;margin-left: 10px;">
                                        <input class="form-control form-control-sm" name="photo" id="images"
                                            type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    {{-- marital status --}}

                                    <div class="form-group row mb-0">
                                        <label class="col-sm-4">入国査証<br>Entry Visa</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control date" disabled>

                                        </div>
                                        <label class="col-sm-4">入国査証番号<br>Entry Visa No.</label>
                                        <div class="col-sm-8">

                                            <input type="text" class="form-control" disabled>

                                        </div>
                                        <label class="col-sm-4">発給日<br>Issued Date</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control date" disabled>
                                        </div>
                                        <label class="col-sm-4">有効期限<br>Valid Until</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control date" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5"
                                            style=" font-size: smaller; ">オレンジブック<br>Orange Book</label>
                                        <div class="col-sm-7">
                                            <select class="form-select" disabled>

                                            </select>
                                        </div>
                                        <label class="col-sm-5">発給日<br>Issued Date</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control date" disabled>
                                        </div>
                                        <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                        <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control date" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group row mb-0">
                                        <label for="" class="col-sm-3">備考<br>Remark</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="remark" rows="3"></textarea>
                                        </div>
                                        <label for="" class="col-sm-3">免状等<br>License</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="license">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-6">

                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!-- row  -->
    </div>
@endsection
