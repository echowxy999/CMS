<div id="con-edit-courier-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Courier</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="field-1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="field-1" placeholder="Ewe">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="field-2" class="form-label">Product</label>
                            <input type="text" class="form-control" id="field-2" placeholder="Standard">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p><b>Status:</b></p>
                        <div class="form-check form-switch mb-1">
                            <input type="checkbox" class="form-check-input"	id="light-mode-check"/>
                            <label class="form-check-label" for="light-mode-check">Active</label>
                        </div>
                    </div>
                    <div class="col-lg-20">
                        <div class="table-responsive">
                            <h5>Price:</h5>
                            <table data-toggle="table"  class="table-bordered" >
                                <thead class="table-light" class="table-bordered">
                                <tr>
                                    <th data-checkbox="true"></th>
                                    <th>Destination Zone</th>
                                    <th>Zone Code</th>
                                    <th>0.5kg</th>
                                    <th>1kg</th>
                                    <th>2kg</th>
                                    <th>3kg</th>
                                    <th>4kg</th>
                                    <th>5kg</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td></td>
                                    <td>ABX-Albury</td>
                                    <td>ABX</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>ADL_Adelaide</td>
                                    <td>ADL</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>7</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>12</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal-Courier-list -->