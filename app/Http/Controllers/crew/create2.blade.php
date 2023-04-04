@extends('layouts.main-nav')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6 text-dark">
        <form action="{{ route('crew.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Page header -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mb-2 mb-lg-0">
                                <a href="/crew" class="btn btn-white" style="width:150px;">Dashboard</a>
                                <!--<h3 class="mb-0  text-white">JAPANTUNA.com</h3>-->
                            </div>
                            <div>
                                {{-- <a href="/print/crew/{{ $crew->subid }}" target="_blank" class="btn btn-white" --}}
                                    {{-- style="width:150px;">Print</a> --}}
                                <button type="submit" class="btn btn-white" style="width:150px;">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row  -->
            <div class="row mt-6">
                <div class="col-md-12 col-12">
                    <div class="card mb-3">
                        <div class="card-header bg-white  py-4">
                            <h4 class="mb-0">Create New Crew</h4>
                        </div>
                        {{-- isi konten --}}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group row mb-0">
                                        <label for="" class="col-sm-4">登録番号<br>ID No.</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="subid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row mb-0">
                                        <label for="" class="col-sm-5">旅券番号<br>Passport No.</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="passport_id">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group row mb-0">
                                        <label for="" class="col-sm-3" style="
    font-size: 13px;
">特記<br>Special
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
                                        <label for="" class="col-sm-4">出生地<br>Birth Place</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="place">
                                        </div>
                                        <label for="" class="col-sm-4">生年月日<br>Birth Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" name="birth">
                                        </div>
                                        <label class="col-sm-4">年齢<br>Age</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"
                                                disabled>
                                        </div>
                                        <label for="" class="col-sm-4">宗教<br>Religion</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" name="religion">
                                                <option value="Islam">Islam</option>
                                                <option value="Protestant">Protestant</option>
                                                <option value="Catholic">Catholic</option>
                                                <option value="Hinduism">Hinduism</option>
                                                <option value="Buddhism">Buddhism</option>
                                                <option value="Khonghucu">Khonghucu</option>
                                            </select>
                                        </div>
                                        <label class="col-sm-4">身長<br>Height</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="height">
                                        </div>
                                        <label for="" class="col-sm-4">体重<br>Weight</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="weight">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row mb-0">
                                        <label class="col-sm-5">発給日<br>Issued Date</label>
                                        <div class="col-sm-7">
                                            <input type="date" class="form-control" name="passport_issued">
                                        </div>
                                        <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="passport_place">
                                        </div>
                                        <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                        <div class="col-sm-7">
                                            <input type="date" class="form-control" name="passport_valid">
                                        </div>
                                        <label class="col-sm-5">船員手帳<br>Seaman Book</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="seamanbook_id">
                                        </div>
                                        <label class="col-sm-5">発給日<br>Issued Date</label>
                                        <div class="col-sm-7">
                                            <input type="date" class="form-control" name="seamanbook_issued">
                                        </div>
                                        <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="seamanbook_place">
                                        </div>
                                        <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                        <div class="col-sm-7">
                                            <input type="date" class="form-control" name="seamanbook_valid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row mb-0">
                                        <label class="col-sm-5">最終経歴<br>Last Vessel</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="ambil dari data">
                                        </div>
                                        <label for="" class="col-sm-5">下船日<br>Sign-Off</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="signoff" placeholder="ambil dari data">
                                        </div><label for="" class="col-sm-5">新基本給<br>New Salary</label>
                                        <div class="col-sm-7">
                                            <div class="input-group mb-0">
                                                <select class="form-control-inline" id="inputGroupSelect02"
                                                    style="
    margin-right: 1px;
    width: 40px;
    border: 1px solid hwb(234deg 0% 45%);
    border-radius: 0.375rem;
">
                                                    
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
                                                    <option value="Rs">Rs (Pakistani & Sri Lankan Rupee)</option>
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
                                              <option value="{{$job->id}}">{{$job->name}}</option>
                                              @endforeach
                                                {{-- <option value="DECK">DECK</option>
                                                <option value="ENGINE">ENGINE</option>
                                                <option value="ASSISTANT ICE MASTER">ASSISTANT ICE MASTER</option>
                                                <option value="ICE MASTER">ICE MASTER</option>
                                                <option value="ASSISTANT COOK">ASSISTANT COOK</option>
                                                <option value="CHIEF COOK">CHIEF COOK</option>
                                                <option value="BOSUN">BOSUN</option>
                                                <option value="QUARTER MASTER">QUARTER MASTER</option> --}}
                                            </select>
                                        </div><label for="" class="col-sm-5">足のサイズ<br>Shoes Size</label>
                                        <div class="col-sm-7">

                                            <select class="form-select" name="shoes">
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                            </select>
                                        </div><label for="" class="col-sm-5">手袋<br>Glove Size</label>
                                        <div class="col-sm-7">
                                            <select class="form-select" name="glove">
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                            </select>
                                        </div><label for="" class="col-sm-5">カッパ<br>Kappa Size</label>
                                        <div class="col-sm-7">
                                            <select class="form-select" name="kappa">
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                                <option value="XXL">XXL</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-2 p-0">
                                    <img src="/img/foto-4x6.png" alt="..." class="img-thumbnail"
                                        style="width: 200px;">
                                    <div class="mt-2"
                                        style="
    position: absolute;
    margin-top: -20px !important;
    width: 180px;
    margin-left: 10px;
">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group mb-0">
                                        <label class="col-sm-4" style="margin-right: 12px;">未婚・既婚<br>Marital
                                            Status</label>
                                        <select class="form-select" name="marital">
                                            <option value="Married">Married</option>
                                            <option value="Single">Single</option>
                                        </select>
                                        <label style="
    margin-left: 8px;
    margin-right: 13px;
">子供<br>Child</label>
                                        <input type="text" class="form-control" name="marital" value="0">
                                        <span class="input-group-text">人</span>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <label class="col-sm-4">国査証<br>National Visa</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nationaly">
                                        </div>
                                        <label class="col-sm-4">査証番号<br>Visa Number</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="visa_id">
                                        </div>
                                        <label class="col-sm-4">有効期限<br>Valid Until</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" name="visa_valid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-5"
                                            style="
    font-size: smaller;
">オレンジブック<br>Orange Book</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="orangebook_id">
                                        </div>
                                        <label class="col-sm-5">発給日<br>Issued Date</label>
                                        <div class="col-sm-7">
                                            <input type="date" class="form-control" name="orangebook_issued">
                                        </div>
                                        <label for="" class="col-sm-5">発給地<br>Issued Place</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="orangebook_place">
                                        </div>
                                        <label for="" class="col-sm-5">有効期限<br>Valid Until</label>
                                        <div class="col-sm-7">
                                            <input type="date" class="form-control" name="orangebook_valid">
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
                        </div>
                        <!--
    <div class="row mt-10">
      <div class="col-md-12">
        
        
      
      <hr>
      <h4>【備考】</h4>
      <ul>
        <li>1．年月日 ：日月は　年、月、日　の類。
        <li>2．職種 ：D = 平板、E = 機関、AI/AIM = 冷凍助手、 IM = 冷凍長、AC = コック助手、CC = コック長、BS = ボースン、QM = 操縦長。</li>
        
          <li>3．船籍 ：JPN = 日本、IND = インドネシア、KOR = 韓国、TWN = 台湾、CHI = 中国、AUS = オーストラリア、USA = 米国、RUS = ロシア、SPN = スペイン、POR = ポルトガル、PNM = パナマ、FJI = フィジー、VAN = バヌアツ、PLY = ポリネシア、MCR = ミクロネシア。 </li>
        
            <li>4．凍結・生 ： FRZ = 冷凍魚、FF = 鮮魚。 </li>
        
              <li>5．種別 ：LL = 延縄、TRW = トロール、PS = まき網、PL = ポールアンドライン、JG = ジガー、FC = 漁業キャリア、FSV = 漁業支援船、FRV = 漁業調査船。 </li>
        
                <li>6．主漁場 ：C = オフラスパルマス、D = オフニュージーランド、E = 日本、F = タスマニア、G = ペルー、H = ハワイ、I = インド、J = ジャワ、K = ケープタウン、O = ヌメア、V = 南マグロ、W = カナダ、アイスランド。 </li>
        
                  <li>7．寒冷 ：JTFC扱いの日本船は寒冷地手当て、その他は船員からの報告を基準。 </li>
        
                    <li>8．下船理由 ： Y = 満了、 N = 途中下船（ND = 病気のため、 NI = ケがのため） </li>
        
                      <li>9．評価は漁労長による、『船員評価表』の総合評価値より抽出。無記入は船員評価表のないもの。</li>
          
      </ul>
      <hr>
      <h4>REMARKS</h4>
      <ul>
        <li>1. Date : Filled in the form of "Year-Month-Date".</li>
    <li>2. Job : D = Deck, E = Engine, AI/AIM = Assistant Ice Master, IM = Ice Master, AC = Assistant Cook, CC = Chief Cook, BS = Boatswain, QM = Quarter Master.</li>
    <li>3. Ship Flag : JPN = Japan, IND = Indonesia, KOR = Korea, TWN = Taiwan, CHI = China, AUS = Australia, USA = USA, RUS = Rusia, SPN = Spain, POR = Portugal, PNM = Panama, FJI = Fiji, VAN = Vanuatu, PLY = Polynesia, MCR = Micronesia.</li>
    <li>4. Freezer : FRZ = Frozen Fish, FF = Fresh Fish.</li>
    <li>5. Type : LL = Longline, TRW = Trawl, PS = Purse Seine, PL = Pole & Line, JG = Jigger, FC = Fishing Carrier, FSV = Fishery Support Vessel, FRV = Fishery Research Vessel.</li>
    <li>6. Fishing Ground : C = Off Las Palmas, D = Off New Zealand, E = Japan, F = Tasmania, G = Peru, H = Hawai, I = Indian, J = Jawa, K = Cape Town, O = Noumea, V = South Tuna, W = Canada/Iceland.</li>
    <li>7. Cold Area : Japanese ships handled by JTFC are treated as cold weather vessels, others are based on reports from the crew.</li>
    <li>8. Disembark. Reason : Y = Terminated/Completed, N = Going Ashore Midway (ND= Caused by Sickness, NI= Caused by Injury).</li>
    <li>9. The evaluation is extracted from the overall evaluation value of the "Crew Evaluation Table" by Fishing Master. No entry indicates no crew evaluation sheet.</li>
      </ul>
      </div>
    </div>
    {{-- end row --}}
    -->
                    </div>
                    <!--card body end-->
                </div>
            </div>
        </form>
       
    </div>
    <!-- row  -->
    <section class="row">
        <div class="card border-primary" style="
    background-color: #f2f7ff;
    border-radius: 0;">
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <style>
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
    </style>
@endsection
