@extends('layouts.horizontal')
@section('content')
<form action="{{ route('crew.update',$crew->id) }}" method="POST">
  @csrf
  @method('PUT')
<div class="row">
  <table class="table">
    
    <tbody>
      <tr>
        <td>To : JAPAN TUNA FISHERIES CORPORATION (JTFC)</td>
        <td class="text-end" >From : PT. ANGKASA AKBAR TARUNA (AAT)</td>
       
      </tr>
      <tr>
        <td >Attn : MR. ABE / MR. SASAKI</td>
        <td class="text-end">Date : 12 Desember 2021</td>
       
      </tr>
      
    </tbody>
  </table>
  
</div>
<div class="row">
  <div class="col-2">
    <div class="form-group row mb-0">
      <label for="" class="col-sm-3">件名<br>Re :</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" name="subid" value="" placeholder="83 SHOSHIN MARU">
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="form-group row mb-0">
      <label for="" class="col-sm-5">派遣日<br>Embarkation Date</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="subid" value="" placeholder="1-Sep-12">
      </div>
    </div>
  </div>
  <div class="col-2">
    <div class="form-group row mb-0">
      <label for="" class="col-sm-7">下船予定日<br>Estimated Sign Off</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="subid" value="" placeholder="9-Jan-14">
      </div>
    </div>
  </div>
  <div class="col-2">
    
    <div class="form-group row mb-0">
      <label for="" class="col-sm-12">に対するインドネシア人船員候補者<br>Crew Particular For</label>
    </div>
  </div>
  <div class="col-3">
    <div class="form-group row mb-0">
      <label for="" class="col-sm-5">派遣港<br>Embarkation Port</label>
      <div class="col-sm-7">
        <input type="text" class="form-control" name="subid" value="" placeholder="LAS PALMAS">
      </div>
    </div>
  </div>
<hr>  
</div>
<div class="row">
  <div class="col-4">
    <div class="form-group row mb-0">
      <label for="" class="col-sm-4">登録番号<br>ID. No</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="subid" value="{{$crew->subid}}" disabled>
      </div>
    </div>
  </div>
  <div class="col-3">
    <div class="form-group row mb-0">
      <label for="" class="col-sm-4">旅券番号<br>Passport No.</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="passport_id" value="{{$crew->passport_id}}">
      </div>
    </div>
  </div>
  <div class="col-5">
    <div class="form-group row mb-0">
      <label for="" class="col-sm-3" >特記<br>Special Remark</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" name="specialmark" value="{{$crew->specialmark}}">
    </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-4">
      
    <div class="form-group row mb-0">
        
        <label class="col-sm-4">名前<br>Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="name" value="{{$crew->name}}">
        </div>
        <label for="" class="col-sm-4">出生地<br>Birth Place</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="place" value="{{$crew->place}}">
        </div>
        
        <label for="" class="col-sm-4">生年月日<br>Birth Date</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="birth" value="{{$crew->birth}}">
        </div>
        <label class="col-sm-4">年齢<br>Age</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($crew->birth)->diff(\Carbon\Carbon::now())->y }} tahun" disabled>
        </div>
        <label for="" class="col-sm-4">宗教<br>Religion</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="religion" value="{{$crew->religion}}">
        </div>
        <label class="col-sm-4">身長<br>Height</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="height" value="{{$crew->height}}">
        </div>
        <label for="" class="col-sm-4">体重<br>Weight</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="weight" value="{{$crew->weight}}">
        </div>
        
        
      </div>
</div>
<div class="col-3">
    
    <div class="form-group row mb-0">
     
      <label class="col-sm-4">発給日<br>Issued Date</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="passport_issued" value="{{$crew->passport_issued}}">
      </div>
      <label for="" class="col-sm-4">発給地<br>Issued Place</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="passport_place" value="{{$crew->passport_place}}">
      </div>
      
      <label for="" class="col-sm-4">有効期限<br>Valid Until</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="passport_valid" value="{{$crew->passport_valid}}">
      </div>
      <label class="col-sm-4">船員手帳<br>Seaman Book</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="seamanbook_id" value="{{$crew->seamanbook_id}}">
      </div>
      <label class="col-sm-4">発給日<br>Issued Date</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="seamanbook_issued" value="{{$crew->seamanbook_issued}}">
      </div>
      <label for="" class="col-sm-4">発給地<br>Issued Place</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="seamanbook_place" value="{{$crew->seamanbook_place}}">
      </div>
      
      <label for="" class="col-sm-4">有効期限<br>Valid Until</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="seamanbook_valid" value="{{$crew->seamanbook_valid}}">
      </div>
      
      
      
    </div>
    
 
</div>
<div class="col-3">
  <div class="form-group row mb-0">
    
    
    <label class="col-sm-5">最終経歴<br>Last Vessel</label>
          <div class="col-sm-7">
            <input type="text" class="form-control">
          </div>
          <label for="" class="col-sm-5">下船日<br>Sign Off</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  name="signoff" value="{{$crew->signoff}}">
      </div><label for="" class="col-sm-5">新基本給<br>New Salary</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  name="salary" value="{{$crew->salary}}">
      </div><label for="" class="col-sm-5">職種<br>Job</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  name="job" value="{{$crew->job}}">
      </div><label for="" class="col-sm-5">足のサイズ<br>Shoes Size</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  name="shoes" value="{{$crew->shoes}}">
      </div><label for="" class="col-sm-5">手袋<br>Glove Size</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  name="glove" value="{{$crew->glove}}">
      </div><label for="" class="col-sm-5">カッパ<br>Kappa Size</label>
      <div class="col-sm-7">
        <input type="text" class="form-control"  name="kappa" value="{{$crew->kappa}}">
      </div>
      {{-- <button type="submit" class="btn btn-primary">Update</button>
<button type="button" class="btn btn-success">Print</button> --}}
  </div>
  
  </div>
  <div class="col-2">
    <div class="form-group row mb-0">
      <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" alt="..." class="img-thumbnail" style="width: 200px;">
    </div>
  
    
    </div>
    
       
</div> 
{{-- end row --}}
<div class="row">
  <div class="col-4">
    <div class="form-group row mb-0">
      <label class="col-sm-4">未婚・既婚<br>Marital Status</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="marital" value="{{$crew->marital}}">
          </div>
          <label class="col-sm-2">子供<br>Child</label>
          <div class="col-sm-3">
            <input type="text" class="form-control" name="marital" value="0人">
          </div>
          <label class="col-sm-4">国査証<br>National Visa</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nationaly" value="{{$crew->nationaly}}">
          </div>
          <label class="col-sm-4">査証番号<br>Visa Number</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="visa_id" value="{{$crew->visa_id}}">
          </div>
          <label class="col-sm-4">有効期限<br>Valid Until</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="visa_valid" value="{{$crew->visa_valid}}">
          </div>
    </div>
  </div>
  <div class="col-3">
    <div class="form-group row mb-0">
      <label for="" class="col-sm-4">オレンジブック<br>Orange Book</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="orangebook_id" value="{{$crew->orangebook_id}}">
      </div>
      <label class="col-sm-4">発給日<br>Issued Date</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="orangebook_issued" value="{{$crew->orangebook_issued}}">
      </div>
      <label for="" class="col-sm-4">発給地<br>Issued Place</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="orangebook_place" value="{{$crew->orangebook_place}}">
      </div>
      
      <label for="" class="col-sm-4">有効期限<br>Valid Until</label>
      <div class="col-sm-8">
        <input type="text" class="form-control"  name="orangebook_valid" value="{{$crew->orangebook_valid}}">
      </div>
    </div>
  </div>
  <div class="col-5">
    <div class="form-group row mb-0">
      
      <label for="" class="col-sm-3">備考<br>Remark</label>
      <div class="col-sm-9">
        <textarea class="form-control" name="remark" rows="3">{{$crew->remark}}</textarea>
      </div>
      <label for="" class="col-sm-3">免状等<br>License</label>
      <div class="col-sm-9">
        <input type="text" class="form-control"  name="license" value="{{$crew->license}}">
      </div>
    </div>
  </div>
</div>
</div>
</form>
<div class="row mt-3">
  <span>１９９５年以降の乗船経歴</span>
  <h5>Experience since 1995</h5>
  <table class="table-bordered text-center">
    <thead>
        <tr><th>船名<br>Vessel's Name</th>
        <th>乗船日<br>Sign On</th>
        <th>下船日<br>Sign Off</th>
        <th>乗船期限（月）<br>Period (Month)</th>
        <th>基本給<br>Salary</th>
        <th>ボーナス<br>Bonus</th>
        <th>職種<br>Job</th>
        <th>船籍<br>Ship Flag</th>
        <th>凍結・生<br>Freezer</th>
        <th>種別<br>Type</th>
        <th>主漁場<br>Fishing Ground</th>
        <th>トン数<br>Tonnage</th>
        <th>漁労長<br>Fishing Master</th>
        <th>寒冷<br>Cold Area</th>
        <th>下船理由<br>Disembark. Reason</th>
        <th>評価<br>Grade</th>	
        
    </tr></thead>
    <tbody>
        <tr>
          <td>MV. SUMBER HARAPAN</td>
        <td>06-03-15</td>
        <td>07-03-25</td>
        <td>15</td>
        <td>Rp. 500.000</td>
        <td>Rp. 250.000</td>
        <td>D</td>
        <td>IND</td>
        <td>FF</td>
        <td>LL</td>
        <td>CAPE TOWN</td>
        <td>35</td>
        <td>TWN</td>
        <td>NO</td>
        <td>Y</td>
        <td>-</td>
    </tr>
    <tr>
      <td>MV. SUMBER HARAPAN</td>
    <td>06-03-15</td>
    <td>07-03-25</td>
    <td>15</td>
    <td>Rp. 500.000</td>
    <td>Rp. 250.000</td>
    <td>D</td>
    <td>IND</td>
    <td>FF</td>
    <td>LL</td>
    <td>CAPE TOWN</td>
    <td>35</td>
    <td>TWN</td>
    <td>NO</td>
    <td>Y</td>
    <td>-</td>
</tr>
<tr>
  <td>MV. SUMBER HARAPAN</td>
<td>06-03-15</td>
<td>07-03-25</td>
<td>15</td>
<td>Rp. 500.000</td>
<td>Rp. 250.000</td>
<td>D</td>
<td>IND</td>
<td>FF</td>
<td>LL</td>
<td>CAPE TOWN</td>
<td>35</td>
<td>TWN</td>
<td>NO</td>
<td>Y</td>
<td>-</td>
</tr>
<tr>
  <td>MV. SUMBER HARAPAN</td>
<td>06-03-15</td>
<td>07-03-25</td>
<td>15</td>
<td>Rp. 500.000</td>
<td>Rp. 250.000</td>
<td>D</td>
<td>IND</td>
<td>FF</td>
<td>LL</td>
<td>CAPE TOWN</td>
<td>35</td>
<td>TWN</td>
<td>NO</td>
<td>Y</td>
<td>-</td>
</tr>
<tr>
  <td>MV. SUMBER HARAPAN</td>
<td>06-03-15</td>
<td>07-03-25</td>
<td>15</td>
<td>Rp. 500.000</td>
<td>Rp. 250.000</td>
<td>D</td>
<td>IND</td>
<td>FF</td>
<td>LL</td>
<td>CAPE TOWN</td>
<td>35</td>
<td>TWN</td>
<td>NO</td>
<td>Y</td>
<td>-</td>
</tr>
<tr>
  <td>MV. SUMBER HARAPAN</td>
<td>06-03-15</td>
<td>07-03-25</td>
<td>15</td>
<td>Rp. 500.000</td>
<td>Rp. 250.000</td>
<td>D</td>
<td>IND</td>
<td>FF</td>
<td>LL</td>
<td>CAPE TOWN</td>
<td>35</td>
<td>TWN</td>
<td>NO</td>
<td>Y</td>
<td>-</td>
</tr>
<tr>
  <td>MV. SUMBER HARAPAN</td>
<td>06-03-15</td>
<td>07-03-25</td>
<td>15</td>
<td>Rp. 500.000</td>
<td>Rp. 250.000</td>
<td>D</td>
<td>IND</td>
<td>FF</td>
<td>LL</td>
<td>CAPE TOWN</td>
<td>35</td>
<td>TWN</td>
<td>NO</td>
<td>Y</td>
<td>-</td>
</tr>
    @foreach ($exp as $exp)
    <tr>
          <td>{{$exp->vesselsname}}</td>
        <td>{{$exp->signon}}</td>
        <td>{{$exp->signoff}}</td>
        <td>{{$exp->periode}}</td>
        <td>Rp. {{$exp->salary}}</td>
        <td>Rp. {{$exp->bonus}}</td>
        <td>{{$exp->job}}</td>
        <td>{{$exp->shipflag}}</td>
        <td>{{$exp->freezer}}</td>
        <td>{{$exp->type}}</td>
        <td>{{$exp->fishingground}}</td>
        <td>{{$exp->tonnage}}</td>
        <td>{{$exp->fishingmaster}}</td>
        <td>{{$exp->coldarea}}</td>
        <td>{{$exp->disembark}}</td>
        <td>{{$exp->grade}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
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
    </div>
  </div>
</section>
   
   
    
@endsection