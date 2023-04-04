<div class="modal fade" id="expmodal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form action="{{ route('exp.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Experience to Crew ID {{ $crew->subid }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


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

                                    <input type="number" max="10000" min="0" class="form-control"
                                        name="number">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="crew_id" class="form-label">所属 | Affiliation</label>
                                <select class="form-select" name="affiliation">
                                    <option value="" selected>--SELECT--</option>
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
                                <input type="text" class="form-control date" placeholder="yyyy/mm/dd/"
                                    name="signon">
                            </div>

                            <!--<div class="mb-3">-->
                            <!--  <label for="crew_id" class="form-label">乗船期限（月） | Period (Month)</label>-->
                            <!--  <input type="text" class="form-control" name="periode" >-->
                            <!--</div>-->

                            <div class="mb-3">
                                <label for="crew_id" class="form-label">下船日 | Sign Off</label>
                                <input type="text" class="form-control date" placeholder="yyyy/mm/dd/"
                                    name="signoff">
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

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
