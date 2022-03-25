<div id="con-edit-invoice-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Edit Invoice #1101</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <label for="dropdownMenuButton" class="form-label">Customer:</label><br>
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Customer <i class="mdi mdi-chevron-down"></i>
                            </button>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Customer 1</a>
                                <a class="dropdown-item" href="#">Customer 2</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-invoice-date" class="form-label">Invoice Date:</label>
                            <input type="date" class="form-control" id="field-invoice-date" value="2018-08-13">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="dropdown">
                            <label for="email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="field-email"><br>
                            <a href="#"><u>Add cc</u></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="field-invoice-date" class="form-label">Due Date:</label>
                            <input type="date" class="form-control" id="field-invoice-date" value="2018-08-13">
                        </div>
                    </div>
                </div>
                <br></br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="">
                            <label for="field-billing-address" class="form-label">Billing Address</label>
                            <textarea class="form-control" id="field-billing-address" rows="9"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="field-billing-address" class="form-label">Attachement</label>
                        <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                              data-upload-preview-template="#uploadPreviewTemplate">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                            <div class="dz-message needsclick">
                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                <h3>Drop files here or click to upload.</h3>
                            </div>
                        </form>
                        <!-- Preview -->
                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Amount</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Product 1</td>
                            <td>example</td>
                            <td>1</td>
                            <td>$25.00</td>
                            <td>
                                <button type="button" class="btn btn-link  btn-lg waves-effect"><i class="mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Product 2</td>
                            <td>example</td>
                            <td>1</td>
                            <td>$18.89</td>
                            <td>
                                <button type="button" class="btn btn-link  btn-lg waves-effect"><i class="mdi mdi-delete"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
                <div class="clearfix">
                    <div class="mt-3 float-start">
                        <button type="button" class="btn btn-light waves-effect waves-light">Add Lines</button>
                        <button type="button" class="btn btn-light waves-effect waves-light" style="margin-left:10px;">Add Subtotal</button>
                    </div>

                    <div class="mt-3 float-end">
                        <p><strong><font size="4">Total: $43.89</font></strong></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div><!-- /.modal-edit-invoice -->