<div id="contact" class="tab-pane">
    <div class="card-body">

        <form onsubmit="return confirm('Are you sure?');" action="{{ route('crew.update', $crew->id) }}"
            enctype="multipart/form-data" method="POST">

            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="card smooth-shadow-md">
                        <div class="card-body">
                            <h4 class="card-title">船員連絡先 | Crew Contacts</h4>
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                  col-form-label form-label">携帯番号1<br />Mobile
                                    No. 1</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" name="mobile_1"
                                        value="{{ $crew->mobile_1 }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                  col-form-label form-label">携帯番号2<br />Mobile
                                    No. 2</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" value="{{ $crew->mobile_2 }}"
                                        name="mobile_2">
                                </div>
                            </div>
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                  col-form-label form-label">メール
                                    1<br />Email</label>
                                <div class="col-md-8 col-12">
                                    <input type="email" class="form-control" value="{{ $crew->email_1 }}"
                                        name="email_1">
                                </div>
                            </div>
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                  col-form-label form-label">メール
                                    2<br />Email
                                    2</label>
                                <div class="col-md-8 col-12">
                                    <input type="email" value="{{ $crew->email_2 }}" class="form-control"
                                        name="email_2">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="card smooth-shadow-md">
                        <div class="card-body">
                            <h4 class="card-title">
                                緊急連絡先1 | Emergency Contact 1:
                            </h4>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">名前<br>Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $crew->emergency_name_1 }}"
                                        name="emergency_name_1">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">関係<br>Relationship</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="emergency_relation_1"
                                        value="{{ $crew->emergency_relation_1 }}">
                                        @if ($crew->emergency_relation_1)
                                            <option value="{{ $crew->emergency_relation_1 }}" selected>
                                                {{ $crew->emergency_relation_1 }}</option>
                                        @else
                                            <option value="" selected>==SELECT==</option>
                                        @endif


                                        <option value="Wife">Wife</option>
                                        <option value="Son">Son</option>
                                        <option value="Daughter">Daughter</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Auntie">Auntie</option>
                                        <option value="Nephew">Nephew</option>
                                        <option value="Niece">Niece</option>
                                        <option value="Grandfather">Grandfather</option>
                                        <option value="Grandmother">Grandmother</option>
                                        <option value="Grandson">Grandson</option>
                                        <option value="Granddaughter">Granddaughter</option>
                                        <option value="Granduncle">Granduncle</option>
                                        <option value="Grandauntie">Grandauntie</option>
                                        <option value="Grandnephew">Grandnephew</option>
                                        <option value="Grandniece">Grandniece</option>
                                        <option value="Father in Law">Father in Law</option>
                                        <option value="Mother in Law">Mother in Law</option>
                                        <option value="Grandfather in Law">Grandfather in Law</option>
                                        <option value="Grandmother in Law">Grandmother in Law</option>
                                        <option value="Friend">Friend</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">携帯番号<br>Mobile
                                    No.</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value="{{ $crew->emergency_mobile_1 }}"
                                        name="emergency_mobile_1">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">メール<br>Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                        value="{{ $crew->emergency_email_1 }}" name="emergency_email_1">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-4">

                    <div class="card smooth-shadow-md">
                        <div class="card-body">
                            <h4 class="card-title">
                                緊急連絡先2 | Emergency Contact 2:
                            </h4>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">名前<br>Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="emergency_name_2"
                                        value="{{ $crew->emergency_name_2 }}">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">関係<br>Relationship</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="emergency_relation_2"
                                        value="{{ $crew->emergency_relation_2 }}">
                                        @if ($crew->emergency_relation_2)
                                            <option value="{{ $crew->emergency_relation_2 }}" selected>
                                                {{ $crew->emergency_relation_2 }}</option>
                                        @else
                                            <option value="" selected>==SELECT==</option>
                                        @endif

                                        <option value="Wife">Wife</option>
                                        <option value="Son">Son</option>
                                        <option value="Daughter">Daughter</option>
                                        <option value="Father">Father</option>
                                        <option value="Mother">Mother</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Uncle">Uncle</option>
                                        <option value="Auntie">Auntie</option>
                                        <option value="Nephew">Nephew</option>
                                        <option value="Niece">Niece</option>
                                        <option value="Grandfather">Grandfather</option>
                                        <option value="Grandmother">Grandmother</option>
                                        <option value="Grandson">Grandson</option>
                                        <option value="Granddaughter">Granddaughter</option>
                                        <option value="Granduncle">Granduncle</option>
                                        <option value="Grandauntie">Grandauntie</option>
                                        <option value="Grandnephew">Grandnephew</option>
                                        <option value="Grandniece">Grandniece</option>
                                        <option value="Father in Law">Father in Law</option>
                                        <option value="Mother in Law">Mother in Law</option>
                                        <option value="Grandfather in Law">Grandfather in Law</option>
                                        <option value="Grandmother in Law">Grandmother in Law</option>
                                        <option value="Friend">Friend</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">携帯番号<br>Mobile
                                    No.</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                        value="{{ $crew->emergency_mobile_2 }}" name="emergency_mobile_2">
                                </div>
                            </div>
                            <div class="row">
                                <label for="staticEmail" class="col-sm-4 col-form-label">メール<br>Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"
                                        value="{{ $crew->emergency_email_2 }}" name="emergency_email_2">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-grid gap-2 mt-6">

                <button class="btn btn-primary" type="submit">Update</button>
            </div>
            <hr>
        </form>

        <div class="row mt-3">
            <div class="col-md-8">
                <h4>ID List</h4>
                <table class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>ID Type</th>
                            <th>ID No.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>National ID</td>
                            <td></td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <a href="https://image.shutterstock.com/image-vector/ktp-indonesia-id-card-260nw-1628461459.jpg"
                                            class="btn btn-sm btn-outline-primary" target="_blank">View</a>

                                        <form onclick="return confirm('Are you sure?')" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                id="button-addon2">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Family ID</td>
                            <td></td>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group mb-3">
                                        <a href="https://i.pinimg.com/736x/17/75/dd/1775dd83c315f498397774c634f14267.jpg"
                                            class="btn btn-sm btn-outline-primary" target="_blank">View</a>

                                        <form onclick="return confirm('Are you sure?')" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                id="button-addon2">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <div class="card smooth-shadow-md">
                    <div class="card-body">
                        <h4 class="card-title">
                            船員ID伍 | Crew ID Files

                        </h4>
                        <form action="{{ route('contact.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input name="crew_id" value="{{ $crew->id }}" hidden>

                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">ID伍
                                    (PDF)<br /> ID File (PDF)</label>
                                <div class="col-md-8 col-12">
                                    <input type="file" class="form-control-file" name="file" id="path"
                                        placeholder="" aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">ID方
                                    <br /> ID Type</label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="type">
                                        <option selected="">==SELECT==</option>
                                        <option value='Birth Certificate (Akta Kelahiran)'>Birth Certificate (Akta
                                            Kelahiran)</option>
                                        <option value='National ID (KTP)'>National ID (KTP)</option>
                                        <option value='National ID (KK)'>Family ID (KK)</option>
                                        <option value='Driver Licence (SIM)'>Driver Licence (SIM)</option>
                                        <option value='Police Certificate (SKCK)'>Police Certificate (SKCK)</option>
                                        <option value='Marriage Certificate (Akta Perkawinan)'>Marriage Certificate
                                            (Akta Perkawinan)</option>
                                        <option value='Divorce Certificate (Akta Perceraian)'>Divorce Certificate (Akta
                                            Perceraian)</option>
                                        <option value='Death Certificate (Akta Kematian)'>Death Certificate (Akta
                                            Kematian)</option>
                                    </select>
                                </div>
                            </div>
                            <!-- row -->

                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                          form-label">ID番号
                                    <br />ID No.

                                </label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" id="addressLine">
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



        </form>
    </div>
</div>
