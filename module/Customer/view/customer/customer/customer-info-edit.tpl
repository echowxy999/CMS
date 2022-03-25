<div class="tab-pane active" id="Cust-Info">
    <div class="portlet box blue ">
        <div class="portlet-body form">
            <form class="" action="" method="post">
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label">*Company Name</label>
                        <input type="text" class="form-control" name="comp_name" value="{$cust->companyNameCust}"></div>
                    <div class="form-group">
                        <label class="control-label">Contact Name</label>
                        <input type="text" class="form-control" name="cont_name" value="{$cust->contactNameCust}"></div>
                    <div class="form-group">
                        <label class="control-label">*Email</label>
                        <input type="text" class="form-control" name="email" value="{$cust->emailCust}"></div>
                    <div class="form-group">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="customSwitch1">Is Active</label>
                            {if $cust->isActive == "1"}
                                {$isActive = checked}
                            {/if}
                            <input type="checkbox" class="form-check-input" name="is_active" id="customSwitch1" value="1" {$isActive}>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn default">Cancel</button>
                    <button type="submit" name="btn_update_customer" class="btn red">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>