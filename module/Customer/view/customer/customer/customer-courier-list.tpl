<div class="tab-pane active" id="Courier-list">
    <div class="button-list">
        <button type="button" class="btn btn-blue waves-effect waves-light">Add</button>
        <button type="button" class="btn btn-warning waves-effect waves-light">Inactive</button>
        <button type="button" class="btn btn-danger waves-effect waves-light">Delete</button>
    </div>
    <br>
    <table class="table table-bordered mb-0">
        <thead class="table-light">
        <tr>
            <th><input type="checkbox" class="form-check-input" id="customCheck1"></th>
            <th>Name</th>
            <th>Product</th>
            <th>Price List</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td><input type="checkbox" class="form-check-input" id="customCheck1"></td>
            <td>Ewe</td>
            <td>Standard</td>
            <td>See price list</td>
            <td>Active</td>
            <td>
                <button type="button" class="btn btn-link  btn-lg waves-effect" data-bs-toggle="modal" data-bs-target="#con-edit-courier-modal"><i class="mdi mdi-square-edit-outline"></i></button>
                <button type="button" class="btn btn-link  btn-lg waves-effect"><i class="mdi mdi-delete"></i></button>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Ewe</td>
            <td>Express</td>
            <td>See price list</td>
            <td>Active</td>
            <td>
                <button type="button" class="btn btn-link  btn-lg waves-effect" data-bs-toggle="modal" data-bs-target="#con-edit-courier-modal"><i class="mdi mdi-square-edit-outline"></i></button>
                <button type="button" class="btn btn-link  btn-lg waves-effect"><i class="mdi mdi-delete"></i></button>
            </td>
        </tr>
        </tbody>
    </table>
</div>