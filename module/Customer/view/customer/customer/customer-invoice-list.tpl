<div class="tab-pane" id="Invoice">
    <div class="clearfix">
        <div class="float-start">
            <h4>Paid:$1545.00</h4>
        </div>
        <div class="float-end">
            <h4>Unpaid:345.99</h4>
        </div>
    </div>
    <div class="progress mb-2 progress-xl">
        <div class="progress-bar bg-warning" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="pt-3 pb-4">
        <div class="input-group">
            <input type="text" class="form-control" value="Search Invoice">
            <button type="button" class="input-group-text btn waves-effect waves-light btn-blue"><i class="fa fa-search me-1"></i> Search</button>
        </div>
    </div>
    <div class="button-list">
        <button type="button" class="btn btn-blue waves-effect waves-light">Add</button>
        <button type="button" class="btn btn-warning waves-effect waves-light">Send</button>
        <button type="button" class="btn btn-warning waves-effect waves-light">Paid</button>
        <button type="button" class="btn btn-danger waves-effect waves-light">Delete</button>
    </div>
    <br>
    <table class="table table-bordered mb-0">
        <thead class="table-light">
        <tr>
            <th><input type="checkbox" class="form-check-input" id="customCheck1"></th>
            <th>Create Date</th>
            <th>Due Date</th>
            <th>Invoice NO.</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <th><input type="checkbox" class="form-check-input" id="customCheck1"></th>
            <td>03/12/2021</td>
            <td>13/12/2021</td>
            <td>1099</td>
            <td>$255.00</td>
            <td>Sent</td>
            <td>
                <button type="button" class="btn btn-link  btn-lg waves-effect" data-bs-toggle="modal" data-bs-target="#con-invoice-modal"><i class="mdi mdi-square-edit-outline"></i></button>
                <button type="button" class="btn btn-link  btn-lg waves-effect"><i class="mdi mdi-delete"></i></button>
            </td>
        </tr>
        <tr>
            <th><input type="checkbox" class="form-check-input" id="customCheck1"></th>
            <td>28/11/2021</td>
            <td>08/12/2021</td>
            <td>1098</td>
            <td>$345.99</td>
            <td>Overdue 2 days</td>
            <td>
                <button type="button" class="btn btn-link  btn-lg waves-effect" data-bs-toggle="modal" data-bs-target="#con-invoice-modal"><i class="mdi mdi-square-edit-outline"></i></button>
                <button type="button" class="btn btn-link  btn-lg waves-effect"><i class="mdi mdi-delete"></i></button>
            </td>
        </tr>
        </tbody>
    </table>
</div>