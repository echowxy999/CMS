{extends '../../../../Template/layout/frontend/billing-main-layout.tpl'}
{block 'content'}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="button-list" style="float: right; margin-bottom: 10px">
                    <button onclick="location.href='/customer/customer-list/customer-add'" type="button" class="btn btn-blue waves-effect waves-light">
                        Add New Customer</button>
                        <button type="button" class="btn btn-success waves-effect waves-light">Active Customer</button>
                        <button type="button" class="btn btn-warning waves-effect waves-light">Inactive Customer</button>
                </div>
                <br>
                <table class="table table-bordered mb-0">
                    <thead class="table-light">
                    <tr>
                        <th><input type="checkbox" class="form-check-input" id="customCheck1"></th>
                        <th>Company Name</th>
                        <th>Contact Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                        <th>Is Active</th>
                    </tr>
                    </thead>

                    <tbody>
                    {foreach $custinfo as $cust}
                    <tr>
                        <td><input type="checkbox" class="form-check-input" id="customCheck1"></td>
                        <td><a href="customer-list/customer-view/{$cust->id}">{$cust->companyNameCust}</td>
                        <td>{$cust->contactNameCust}</td>
                        <td>{$cust->emailCust}</td>
                        <td>
                            <a href="customer-list/customer-edit/{$cust->id}">
                                <i data-feather="edit"></i>
                            </a>
                        </td>
                        <td>
                            <div class="form-check form-switch mb-1">
                                {if $cust->isActive == "1"}
                                    {$isActive = checked}
                                {/if}
                                <input type="checkbox" class="form-check-input" disabled id="customSwitch1" {$isActive}>
                            </div>
                        </td>
                    </tr>
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div><!-- end row -->
{/block}