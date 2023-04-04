<div id="certificates" class="tab-pane">
    <div class="card-body">
        <h3>船員証明書 (Crew Certificates)</h3>
        <div class="row mb-5">
            <hr>
            <h4>C.O.E List</h4>

            <div class="col-md-8">
                <table class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Certificate Type</th>
                            <th>Certificate No.</th>
                            <th>Issued Date</th>
                            <th>Issued Place</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($certificates->where('category', 'Education') as $education)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $education->type }}</td>
                                <td>{{ $education->no }}</td>
                                <td>{{ $education->issued }}</td>
                                <td>{{ $education->place }}</td>

                                <td>
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <a class="btn btn-sm btn-outline-primary" target="_blank">View</a>

                                            <form method="POST"
                                                action="{{ route('certificate.destroy', $education->id) }}">

                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger" type="submit"
                                                    id="button-addon2">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="card smooth-shadow-md">
                    <div class="card-body">
                        <h4 class="card-title">免状証明書 | Certificate of Education (C.O.E)</h4>

                        <form action="{{ route('certificate.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input name="crew_id" value="{{ $crew->id }}" hidden>
                            <input value="Education" name="category" hidden>
        
                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">証明書伍
                                    (PDF)<br />Certificate File (PDF)</label>
                                <div class="col-md-8 col-12">
                                    <input type="file" class="form-control-file" name="file" id="path" placeholder=""
                                        aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="location"
                                    class="col-sm-4 col-form-label
                                              form-label">証明書方
        
                                    <br />Certificate Type</label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="type">
                                        <option selected="">==SELECT==</option>
                                        <option>SD/MI</option>
                                        <option>SMP/MTs</option>
                                        <option>SMA/MA/STM/SMK</option>
                                        <option>D-1</option>
                                        <option>D-2</option>
                                        <option>D-3</option>
                                        <option>D-IV</option>
                                        <option>S-1</option>
                                        <option>S-2</option>
                                        <option>S-3</option>
        
                                    </select>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                              form-label">証明書号
                                    <br />Certificate No.</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" name="no" class="form-control">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">発給日
                                    <br />Issued Date</label>
                                <div class="col-md-8 col-12">
        
                                    <input type="text" class="form-control date" name="issued" placeholder="yyyy/mm/dd">
                                </div>
                            </div>
        
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">発給地
                                    <br />Issued Place</label>
                                <div class="col-md-8 col-12">
        
                                    <input type="text" name="place" class="form-control">
                                </div>
                            </div>
        
                            <!-- row -->
                            <div class="d-grid gap-2">
        
                                <button class="btn btn-primary" type="submit">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row mb-5">
            <h4>C.O.C List</h4>
            <div class="col-md-8">
                <table class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Certificate Type</th>
                            <th>Certificate No.</th>
                            <th>Issued Date</th>
                            <th>Issued Place</th>
                            <th>Valid Until</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($certificates->where('category', 'Competence') as $competence)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $competence->type }}</td>
                                <td>{{ $competence->no }}</td>
                                <td>{{ $competence->issued }}</td>
                                <td>{{ $competence->place }}</td>
                                <td>{{ $competence->valid }}</td>
                                <td>
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <a class="btn btn-sm btn-outline-primary" target="_blank">View</a>

                                            <form method="POST"
                                                action="{{ route('certificate.destroy', $competence->id) }}">

                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger" type="submit"
                                                    id="button-addon2">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                
                <div class="card smooth-shadow-md">
                    
                    <div class="card-body">
                        <h4 class="card-title">能力証明書 | Certificate of Competence (C.O.C)</h4>

                        <form action="{{ route('certificate.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input name="crew_id" value="{{ $crew->id }}" hidden>
                            <input value="Competence" name="category" hidden>
        
                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">証明書伍
                                    (PDF)<br />Certificate File (PDF)</label>
                                <div class="col-md-8 col-12">
                                    <input type="file" class="form-control-file" name="file" id="path" placeholder=""
                                        aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="location"
                                    class="col-sm-4 col-form-label
                                              form-label">証明書方<br />Certificate
                                    Type</label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="type">
                                        <option selected="">==SELECT==</option>
                                        <option value='RFP-NW'>RFP-NW (Ratings Forming Part of a Navigational Watch)</option>
                                        <option value='RAS-D'>RAS-D (Ratings as Able Seafarer Deck)</option>
                                        <option value='ANT-V'>ANT-V (Ahli Nautika Tingkat V)</option>
                                        <option value='ANT-IV'>ANT-IV (Ahli Nautika Tingkat IV)</option>
                                        <option value='ANT-III'>ANT-III (Ahli Nautika Tingkat III)</option>
                                        <option value='ANT-II'>ANT-II (Ahli Nautika Tingkat II)</option>
                                        <option value='ANT-I'>ANT-I (Ahli Nautika Tingkat I)</option>
                                        <option value='RFP-EW'>RFP-EW (Ratings Forming Part of an Engineering Watch)</option>
                                        <option value='RAS-E'>RAS-E (Ratings as Able Seafarer Engine)</option>
                                        <option value='ATT-V'>ATT-V (Ahli Teknika Tingkat V)</option>
                                        <option value='ATT-IV'>ATT-IV (Ahli Teknika Tingkat IV)</option>
                                        <option value='ATT-III'>ATT-III (Ahli Teknika Tingkat III)</option>
                                        <option value='ATT-II'>ATT-II (Ahli Teknika Tingkat II)</option>
                                        <option value='ATT-I'>ATT-I (Ahli Teknika Tingkat I)</option>
                                        <option value='SOT'>SOT (Sertifikat Operator Terbatas)</option>
                                        <option value='SOU'>SOU (Sertifikat Operator Umum)</option>
                                        <option value='SRE-II'>SRE-II (Sertifikat Radio Elektronika Kelas II)
                                        </option>
                                        <option value='SRE-I'>SRE-I (Sertifikat Radio Elektronika Kelas I)
                                        </option>
                                        <option value='ANKAPIN-III'>ANKAPIN-III (Ahli Nautika Kapal Penangkap
                                            Ikan tingkat III)</option>
                                        <option value='ANKAPIN-II'>ANKAPIN-II (Ahli Nautika Kapal Penangkap
                                            Ikan tingkat II)</option>
                                        <option value='ANKAPIN-I'>ANKAPIN-I (Ahli Nautika Kapal Penangkap Ikan
                                            tingkat I)</option>
                                        <option value='ATKAPIN-III'>ATKAPIN-III (Ahli Teknika Kapal Penangkap
                                            Ikan tingkat III)</option>
                                        <option value='ATKAPIN-II'>ATKAPIN-II (Ahli Teknika Kapal Penangkap
                                            Ikan tingkat II)</option>
                                        <option value='ATKAPIN-I'>ATKAPIN-I (Ahli Teknika Kapal Penangkap Ikan
                                            tingkat I)</option>
        
        
                                    </select>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                              form-label">証明書号
                                    <br />Certificate No.</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" name="no" class="form-control">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">発給日
                                    <br />Issued Date</label>
                                <div class="col-md-8 col-12">
        
                                    <input type="text" class="form-control date" name="issued" placeholder="yyyy/mm/dd">
                                </div>
                            </div>
        
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">発給地
                                    <br />Issued Place</label>
                                <div class="col-md-8 col-12">
        
                                    <input type="text" name="place" class="form-control">
                                </div>
                            </div>
        
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">有効期限
                                    <br />Valid Until</label>
                                <div class="col-md-8 col-12">
        
                                    <input type="text" class="form-control date" name="valid" placeholder="yyyy/mm/dd">
                                </div>
                            </div>
        
                            <!-- row -->
                            <div class="d-grid gap-2">
        
                                <button class="btn btn-primary" type="submit">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="row mb-5">
            <h4>C.O.P List</h4>
            <div class="col-md-8">
                <table class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Certificate Type</th>
                            <th>Certificate No.</th>
                            <th>Issued Date</th>
                            <th>Issued Place</th>
                            <th>Valid Until</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($certificates->where('category', 'Proficiency') as $proficiency)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $proficiency->type }}</td>
                                <td>{{ $proficiency->no }}</td>
                                <td>{{ $proficiency->issued }}</td>
                                <td>{{ $proficiency->place }}</td>
                                <td>{{ $proficiency->valid }}</td>
                                <td>
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <a class="btn btn-sm btn-outline-primary" target="_blank">View</a>

                                            <form method="POST"
                                                action="{{ route('certificate.destroy', $proficiency->id) }}">

                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger" type="submit"
                                                    id="button-addon2">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>


            <div class="col-md-4">
                
                
                <div class="card smooth-shadow-md">
                    <div class="card-body">
                        <h4 class="card-title">技能証明書 | Certificate of Proficiency (C.O.P)</h4>
                        <form action="{{ route('certificate.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input value="{{ $crew->id }}" name="crew_id" hidden>
                            <input value="Proficiency" name="category" hidden>
        
                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">証明書伍
                                    (PDF)<br />Certificate File (PDF)</label>
                                <div class="col-md-8 col-12">
                                    <input type="file" class="form-control-file" name="file" id="path"
                                        placeholder="" aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="location"
                                    class="col-sm-4 col-form-label
                                              form-label">証明書方<br />Certificate
                                    Type</label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="type">
                                        <option selected="">==SELECT==</option>
                                        <option value='BST'>BST (Basic Safety Training)</option>
                                        <option value='SCRB'>SCRB (Survival Craft & Rescue Boats)</option>
                                        <option value='FRB'>FRB (Fast Rescue Boat)</option>
                                        <option value='AFF'>AFF (Advance Fire Fighting)</option>
                                        <option value='MFA'>MFA (Medical First Aid)</option>
                                        <option value='MC'>MC (Medical Care)</option>
                                        <option value='SAT'>SAT (Security Awareness Training)</option>
                                        <option value='SDSD'>SDSD (Seafarers with Designated Security Duties)
                                        </option>
                                        <option value='CMT'>CMT (Crowd Management Training)</option>
                                        <option value='CMHBT'>CMHBT (Crisis Management & Human Behavior
                                            Training)</option>
                                        <option value='RADAR'>RADAR Simulator</option>
                                        <option value='ARPA'>ARPA (Automatic Radar Plotting Aids) Simulator
                                        </option>
                                        <option value='ECDIS'>ECDIS (Electronic Chart Display & Information
                                            System) Simulator</option>
                                        <option value='GMDSS'>GMDSS (Global Maritime Distress Safety System)
                                        </option>
                                        <option value='BRM'>BRM (Bridge Resource Management)</option>
                                        <option value='ERM'>ERM (Engine Resource Management)</option>
                                        <option value='SO'>SH (Ship Handling)</option>
                                        <option value='SSO'>SSO (Ship Security Officer)</option>
                                        <option value='BOCT'>BOCT (Basic Oil & Chemical Tanker)</option>
                                        <option value='BLGT'>BLGT (Basic Liquefied Gas Tanker)</option>
                                        <option value='AOT'>AOT (Advancer Oil Tanker)</option>
                                        <option value='ACT'>ACT (Advance Chemical Tanker)</option>
                                        <option value='ALGT'>ALGT (Advance Liquefied Gas Tanker)</option>
                                        <option value='IMDG'>IMDG (International Maritime Dangerous Goods)
                                            Code</option>
                                        <option value='ISM'>IMS (International Safety Management) Code
                                        </option>
                                        <option value='MHV'>MHV (Marine High Voltage)</option>
        
        
                                    </select>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                              form-label">証明書号<br />Certificate
                                    No.
                                </label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" name="no">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">発給日
                                    <br />Issued Date</label>
                                <div class="col-md-8 col-12">
        
                                    <input type="text" class="form-control date" name="issued" placeholder="yyyy/mm/dd">
                                </div>
                            </div>
        
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">発給地
                                    <br />Issued Place</label>
                                <div class="col-md-8 col-12">
        
                                    <input type="text" class="form-control">
                                </div>
                            </div>
        
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">有効期限
                                    <br />Valid Until</label>
                                <div class="col-md-8 col-12">
        
                                    <input type="text" class="form-control date" name="valid" placeholder="yyyy/mm/dd">
                                </div>
                            </div>
        
                            <!-- row -->
                            <div class="d-grid gap-2">
        
                                <button class="btn btn-primary" type="submit">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
