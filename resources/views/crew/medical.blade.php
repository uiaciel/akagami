<div id="medical" class="tab-pane">
    <div class="card-body">
        
        <div class="row">

            <div class="col-md-8">
                <h4>Medical List</h4>
                <div class="table-responsive">
                    <table class="table table-bordered border-dark">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Medical Type</th>
                                <th scope="col">Medical Date</th>
                                <th scope="col">Diagnosis/Medical Examination</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicals as $index => $medical)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $medical->type }}</td>
                                    <td>{{ $medical->date }}</td>
                                    <td>{{ $medical->description }}</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <div class="input-group mb-3">
                                                <a href="{{ $medical->path }}" class="btn btn-sm btn-outline-primary"
                                                    target="_blank">View</a>

                                                <form onclick="return confirm('Are you sure?')"
                                                    action="{{ route('medical.destroy', $medical->id) }}"
                                                    method="POST">

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
            </div>
            <div class="col-md-4">
                <div class="card smooth-shadow-md">
                    <div class="card-body">
                        <h4 class="card-title">船員診療 | Crew Medicals</h4>

                        <form action="{{ route('medical.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input value="{{ $crew->id }}" name="crew_id" hidden>
        
                            <div class="mb-3 row">
                                <label for="phone" class="col-sm-4 col-form-label form-label">診療伍
                                    (PDF)<br />Medical File (PDF)</label>
                                <div class="col-md-8 col-12">
                                    <input type="file" class="form-control-file" name="file" id="path" placeholder=""
                                        aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="location"
                                    class="col-sm-4 col-form-label
                                              form-label">診療方
                                    <br />Medical
                                    Type </label>
                                <div class="col-md-8 col-12">
                                    <select class="form-select" id="location" name="type">
                                        <option selected="">==SELECT==</option>
                                        <option value="Medical Check-Up (MCU)">Medical Check-Up (MCU)</option>
                                        <option value="Vaccine">Vaccine</option>
                                        <option value="Outpatien Care">Outpatient Care</option>
                                        <option value="Inpatient Care">Inpatient Care</option>
        
                                    </select>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLine"
                                    class="col-sm-4 col-form-label
                                              form-label">診療日<br />Medical
                                    Date
                                </label>
                                <div class="col-md-8 col-12">
                                    <input type="text" class="form-control date" name="date" placeholder="yyyy/mm/dd">
                                </div>
                            </div>
                            <!-- row -->
                            <div class="mb-3 row">
                                <label for="addressLineTwo"
                                    class="col-sm-4
                                              col-form-label form-label">診断
                                    <br />Diagnosis/Medical Examination</label>
                                <div class="col-md-8 col-12">
        
                                    <textarea class="form-control" rows="3" name="description"></textarea>
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
