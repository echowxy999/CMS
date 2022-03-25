{extends '../../../../Template/layout/frontend/billing-main-layout.tpl'}
{block 'content'}

    <div class="portlet box blue ">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa "></i> Edit Customer </div>
            <div class="tools">
                <a href="" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="" class="reload"> </a>
                <a href="" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="" action="" method="post">
                <div class="form-body">
                    <div class="form-group has-success">
                        <label class="control-label">*Company Name</label>
                        <input type="text" class="form-control" name="comp_name" value="{$cust->companyNameCust}"></div>
                    <div class="form-group has-success">
                        <label class="control-label">Contact Name</label>
                        <input type="text" class="form-control" name="cont_name" value="{$cust->contactNameCust}"></div>
                    <div class="form-group has-success">
                        <label class="control-label">*Email</label>
                        <input type="text" class="form-control" name="email" value="{$cust->emailCust}"></div>
                    <div class="form-group has-success">
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
{/block}