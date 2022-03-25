{extends '../../../../Template/layout/frontend/billing-main-layout.tpl'}
{block 'content'}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="" action="" method="post">
                        <button type="submit" name="btn_call_api" class="btn red">Fetch</button>
                    </form>

                    <h3>Order Summary in 30 days</h3>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>Date</th>
                                {foreach $tableHeader as $date}
                                    <th>{$date}</th>
                                {/foreach}
                            </tr>
                            </thead>
                            <tbody>
                            {foreach $dashboardData as $customers}
                            <tr>
                                {foreach $customers as $date => $customer}
                                    {if $date == "custName"}
                                        <th scope="row">{$customer}</th>
                                    {else}
                                        <th>{$customer["cp_shipment_count"]} / {$customer["notletter_import_count"]}</th>
                                    {/if}
                                {/foreach}
                            </tr>
                            {/foreach}
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
{/block}