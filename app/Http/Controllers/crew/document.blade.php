<div id="document" class="tab-pane">
    <div class="card-body">

        <div class="row">
            <div class="col-md-8">
                <h3>Document List</h3>

                <table class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Document Type</th>
                            <th scope="col">Document No.</th>
                            <th scope="col">Issued Date</th>
                            <th scope="col">Issued Place</th>
                            <th scope="col">Valid Until</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($docs->whereNotIn('type', 'Entry Visa') as $indexx => $doc)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>

                                <td>{{ $doc->type }}</td>
                                <td>{{ $doc->no }}</td>
                                <td>{{ $doc->issued }}</td>
                                <td>{{ $doc->place }}</td>

                                <td>{{ $doc->valid }}</td>
                                <td>
                                    <div class="input-group mb-3">
                                        <a href="{{ $doc->path }}" class="btn btn-sm btn-outline-primary"
                                            target="_blank">View</a>

                                        <form onclick="return confirm('Are you sure?')"
                                            action="{{ route('doc.destroy', $doc->id) }}" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" type="submit"
                                                id="button-addon2">Delete</button>
                                        </form>
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
                        <h4 class="card-title mb-3">船員書類 | Crew Documents</h4>
                        <form action="{{ route('doc.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input name="crew_id" value="{{ $crew->id }}" hidden>

                            <div class="row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">書類伍
                                    (PDF)<br />Document File
                                    (PDF)</label>
                                <div class="col-md-8 col-12">
                                    <input type="file" class="form-control-file" name="file" id="path"
                                        placeholder="" aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <label for="location"
                                    class="col-sm-4 col-form-label
                                              form-label">書類方
                                    <br />Document
                                    Type </label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="type">
                                        <option selected>==SELECT==</option>
                                        <option value="Passport">Passport</option>
                                        <option value="Seaman Book">Seaman Book</option>
                                        <option value="Orange Book">Orange Book</option>
                                    </select>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                              form-label">書類番号<br />Document
                                    No.</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" id="addressLine" required=""
                                        name="no">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">発給日
                                    <br />Issued
                                    Date</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control date" placeholder="yyyy/mm/dd"
                                        id="addressLineTwo" required="" name="issued">
                                </div>
                            </div>
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">発給地
                                    <br />Issued
                                    Place</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" placeholder="Jakarta" id="addressLineTwo"
                                        name="place" required="">
                                </div>
                            </div>
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">有効期限<br />Valid
                                    Until</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" name="valid" class="form-control date"
                                        placeholder="yyyy/mm/dd" id="addressLineTwo" required="">
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
        <hr>
        <div class="row mt-4">


            <div class="col-md-8">
                <h3>Entry Visa List</h3>
                <div class="table-responsive">
                    <table class="table table-bordered border-dark">

                        <thead class="table-dark text-white">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Entry Visa</th>
                                <th scope="col">Document No.</th>
                                <th scope="col">Issued Date</th>
                                <th scope="col">Issued Place</th>
                                <th scope="col">Valid Until</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($docs->Where('type', 'Entry Visa') as $index => $doc)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $doc->country }}</td>
                                    <td>{{ $doc->no }}</td>
                                    <td>{{ $doc->issued }}</td>
                                    <td>{{ $doc->place }}</td>

                                    <td>{{ $doc->valid }}</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <a href="{{ $doc->path }}" class="btn btn-sm btn-outline-primary"
                                                target="_blank">View</a>

                                            <form onclick="return confirm('Are you sure?')"
                                                action="{{ route('doc.destroy', $doc->id) }}" method="POST">

                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger" type="submit"
                                                    id="button-addon2">Delete</button>
                                            </form>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

            </div>

            <div class="col-md-4">

                <div class="card smooth-shadow-md">
                    <div class="card-body">
                        <h4 class="card-title">船員入国査証 | Crew Entry Visa</h4>
                        <form action="{{ route('doc.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input name="crew_id" value="{{ $crew->id }}" hidden>

                            <div class="row">
                                <label class="col-sm-4 col-form-label form-label fs-6">入国査証伍
                                    (PDF)<br />Entry Visa File
                                    (PDF)</label>
                                <div class="col-md-8 col-12">
                                    <input type="file" class="form-control-file" name="file" id="path"
                                        placeholder="" aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <label for="location"
                                    class="col-sm-4 col-form-label
                                                    form-label">査証方<br />Visa
                                    Type </label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="type">
                                        <option selected>==SELECT==</option>
                                        <option value="Entry Visa">Entry Visa</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                                    form-label">入国査証
                                    <br />(Entry Visa)
                                </label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="country">
                                        <option selected>==SELECT==</option>
                                        <option value="Australia">Australia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Schengen">Schengen</option>
                                        <option value="UK">UK</option>
                                        <option value="USA">USA</option>

                                    </select>

                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                                    form-label fs-6">入国査証番号<br />Entry
                                    Visa No.</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" id="addressLine" required=""
                                        name="no">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                                    col-form-label form-label">発給日
                                    <br />Issued
                                    Date</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control date" placeholder="yyyy/mm/dd"
                                        id="addressLineTwo" required="" name="issued">
                                </div>
                            </div>
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                                    col-form-label form-label">発給地
                                    <br />Issued
                                    Place</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control" placeholder="Jakarta"
                                        id="addressLineTwo" name="place" required="">
                                </div>
                            </div>
                            <div class="row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                                    col-form-label form-label">有効期限<br />Valid
                                    Until</label>
                                <div class="col-md-8 col-12">
                                    <input type="text" name="valid" class="form-control date"
                                        placeholder="yyyy/mm/dd" id="addressLineTwo" required="">
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
