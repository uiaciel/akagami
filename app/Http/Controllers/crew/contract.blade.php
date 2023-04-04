<div id="contract" class="tab-pane">
    <div class="card-body">
    
        <div class="row">

            <div class="col-md-8">
                <h3>Contract List</h3>
                <div class="table-responsive">
                    <table class="table table-bordered border-dark">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Contract Type</th>
                                <th scope="col">Contract No.</th>
                                <th scope="col">Vessel Name</th>
                                <th scope="col">Embarkation Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contracts as $index => $contract)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contract->type }}</td>
                                    <td>{{ $contract->no }}</td>
                                    <td>{{ $contract->vessel_name }}</td>
                                    <td>{{ $contract->embarkation }}</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <a href="{{ $contract->pdf }}" class="btn btn-sm btn-outline-primary"
                                                target="_blank">View</a>

                                            <form onclick="return confirm('Are you sure?')"
                                                action="{{ route('medical.destroy', $contract->id) }}" method="POST">

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
                        <h4 class="card-title">
船員契約 | Crew Contracts
                        </h4>
                        <form action="{{ route('contract.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input name="crew_id" value="{{ $crew->id }}" hidden>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-4 col-form-label form-label">契約伍
                            (PDF)<br /> Contract File (PDF)</label>
                        <div class="col-md-8 col-12">
                            <input type="file" class="form-control-file" name="file" id="path" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <label for="addressLine"
                            class="col-sm-4 col-form-label
                                              form-label">契約方
                            <br />(Contract Type)
                        </label>
                        <div class="col-md-8 col-12">
                            <select class="form-select" id="location" name="type">
                                <option selected>==SELECT==</option>
                                <option value="PKL">Marine Employment Contract (PKL)</option>
                                <option value="Memorandum">Memorandum</option>


                            </select>

                        </div>
                    </div>
                    <!-- row -->
                    <div class="mb-3 row">
                        <label for="addressLine"
                            class="col-sm-4 col-form-label
                                          form-label">契約番号<br />Contract
                            No.
                        </label>
                        <div class="col-md-8 col-12">
                            <input type="text" name="no" class="form-control" id="addressLine" required="">
                        </div>
                    </div>
                    <!-- row -->
                    <div class="mb-3 row">
                        <label for="addressLineTwo"
                            class="col-sm-4
                                          col-form-label form-label">船名
                            <br />Vessel Name</label>
                        <div class="col-md-8 col-12">
                            <input type="text" class="form-control" name="vessel_name" id="addressLineTwo"
                                required="">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="addressLineTwo"
                            class="col-sm-4
                                          col-form-label form-label">派遣日
                            <br />Embarkation Date</label>
                        <div class="col-md-8 col-12">
                            <input type="text" name="embarkation" class="form-control date" placeholder="yyyy/mm/dd"
                                id="addressLineTwo" required="">
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
