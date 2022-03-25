<div id="con-invoice-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Invoice #1101</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-4">
                <div class="row">
                    <div class="track-order-list">
                        <div class="mt-3 float-end">
                            <p><strong>Invoice Date: 12/12/2021 </strong></p>
                            <p><strong>Due Date: 30/12/2021</strong></p>
                        </div>
                        <ul class="list-unstyled" >
                            <li class="completed">
                                <h5 class="mt-0 mb-1">Create</h5>
                                <p class="text-muted">12/16/2021 <small class="text-muted">09:35 AM</small> </p>
                            </li>
                            <li>
                                <span class="active-dot dot"></span>
                                <h5 class="mt-0 mb-1">Send</h5>
                                <p class="text-muted">12/16/2021 <small class="text-muted">09:50 PM</small></p>
                            </li>
                            <li>
                                <h5 class="mt-0 mb-1"> Receive Payment</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="progress mb-2" style="height: 4px;">
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="card-body">
                <h4 class="header-title"><b>Customer Name/Company</b></h4>
                <p class="sub-header">
                    1/3 Bourke street, Melbourne, VIC 3000 <br>
                    customer@email.com<br>
                    0400234567
                </p>

                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Product 1</td>
                            <td>example</td>
                            <td>1</td>
                            <td>$25.00</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Product 2</td>
                            <td>example</td>
                            <td>1</td>
                            <td>$18.89</td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
                <div class="mt-3 float-end">
                    <p><strong>&nbsp;&nbsp;&nbsp;&nbsp; Total: $43.89 </strong></p>
                    <p><strong>Balance: $43.89</strong></p>
                </div>
            </div>
            <div class="card-body">
                <p><b>Attachement: <a href="#">invoice 1101 attach.xls</a></b></p>
                <div class="mt-3 float-start">
                    <button type="button" class="btn btn-warning waves-effect">Receive Payment</button>
                    <button type="button" class="btn btn-warning waves-effect waves-light">Send Email</button>

                </div>
                <div class="mt-3 float-end">
                    <button type="button" class="btn btn-info waves-effect" data-bs-toggle="modal" data-bs-target="#con-edit-invoice-modal">Edit</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.modal-invoice -->