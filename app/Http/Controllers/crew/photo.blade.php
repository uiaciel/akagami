<div id="photo" class="tab-pane">
    <div class="card-body">
        <div class="row">

            <div class="col-md-6">
                <h4>Photo List</h4>
                <table class="table table-bordered border-dark">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>No.</th>
                            <th>Photo Type</th>
                            <th>Photo Background</th>
                            <th>Photo Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Photo 3x4</td>
                            <td></td>
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
                            <td>Photo 4x6</td>
                            <td></td>
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
            <div class="col-md-6">
                <div class="card smooth-shadow-md">
                    <div class="card-body">
                        <h4 class="card-title">
船員の写真 | Crew Photos
                        </h4>

                        <input name="crew_id" value="{{ $crew->id }}" hidden>


                <div class="mb-3 row">
                    <label for="phone" class="col-sm-4 col-form-label form-label">写真伍 (JPG)<br />
                        Photo File (JPG)</label>
                    <div class="col-md-8 col-12">
                        <input type="file" class="form-control-file" name="file" id="path" placeholder=""
                            aria-describedby="fileHelpId">
                    </div>
                </div>
                <!-- row -->

                <div class="mb-3 row">
                    <label for="phone" class="col-sm-4 col-form-label form-label">写真方<br>
                        Photo Type</label>
                    <div class="col-md-8 col-12">
                        <select class="form-control">
                            <option>==SELECT==</option>
                            <option>Photo 2x3</option>
                            <option>Photo 3x4</option>
                            <option>Photo 3.5x4.5</option>
                            <option>Photo 4x6</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="phone" class="col-sm-4 col-form-label form-label">写真の背景<br>
                        Photo Background</label>
                    <div class="col-md-8 col-12">
                        <select class="form-control">
                            <option>==SELECT==</option>
                            <option>Black</option>
                            <option>White</option>
                            <option>Red</option>
                            <option>Yellow</option>
                            <option>Green</option>
                            <option>Blue</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="phone" class="col-sm-4 col-form-label form-label">写真日<br />
                        Photo Date</label>
                    <div class="col-md-8 col-12">
                        <input type="text" class="form-control date" placeholder="yyyy/mm/dd"
                            aria-describedby="fileHelpId">
                    </div>
                </div>

                <div class="d-grid gap-2">

                    <button class="btn btn-primary" type="submit">Upload</button>
                </div>

                    </div>
                </div>
                

            </div>
        </div>
    </div>
</div>
