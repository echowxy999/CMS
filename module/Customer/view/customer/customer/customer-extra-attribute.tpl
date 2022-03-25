{extends '../../../../Template/layout/frontend/billing-main-layout.tpl'}
{block 'content'}
    <div>
        <div class="card">
            <div class="card-body">
                <div class="col-lg-8">
                    <form class="" action="" method="post">
                        <div class="card border-primary border mb-3">
                            <div class="card-body">
                                <label>Attribute Name:
                                    <input  name="attri_name" class="form-control"/>
                                </label>
                                <label>Key Name:
                                    <input  name="key_name" class="form-control"/>
                                </label>
                                <button  type="submit" name="btn_add_attribute" class="btn btn-blue waves-effect waves-light">Add New Attribute</button>
                            </div>
                        </div>
                    </form>
                </div>

                <table class="table table-bordered mb-0">
                    <thead class="table-light">
                    <tr>
                        <th>Id</th>
                        <th>Attribute Name</th>
                        <th>Key</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                        <form class="" action="" method="post">
                            {foreach $attrilist as $attri}
                                <tr>
                                    <td>{$attri->id}</td>
                                    <td><input  name="update_name[{$attri->id}]" class="form-control" value="{$attri->nameAttribute}"/></td>
                                    <td><input  name="update_key[{$attri->id}]" class="form-control" value="{$attri->keyAttribute}"/></td>
                                    <td>
                                        <button type="submit" name="btn_update_attribute" value="{$attri->id}" class="btn btn-soft-info rounded-pill waves-effect waves-light">Save Change</button>
                                        {if is_null($attri->disabled)}
                                        <button type="submit" name="btn_disable_attribute" value="{$attri->id}" class="btn btn-soft-danger rounded-pill waves-effect waves-light">Disable</button>
                                        {else}
                                        <button type="submit" name="btn_disable_attribute" value="{$attri->id}" class="btn btn-soft-success rounded-pill waves-effect waves-light">Enable</button>
                                        {/if}
                                        <input type="checkbox" checked data-plugin="switchery" data-color="#ff5d48" data-size="large"/>
                                    </td>
                                </tr>
                            {/foreach}
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{/block}