{extends '../../../../Template/layout/frontend/billing-main-layout.tpl'}
{block 'content'}
    {include file="./shipment-header-tool.tpl"}
    <br>


    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-bordered">
                <li class="nav-item">
                    <a href="#all-b1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                        All(1)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#exception-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Exception(0)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#fail-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Failed attempt(0)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#expired-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Expired(0)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#outfordeli-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Out for delivery(0)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#delivered-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Delivered(0)
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#pending-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Pending(0)
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane show active" id="all-b1">
                    {include file="./shipment-filter-bar.tpl"}
                    {include file="./shipment-list.tpl"}
                </div>
                <div class="tab-pane" id="exception-b1">
                    {include file="./shipment-filter-bar.tpl"}
                    <div>
                        <input type="text" class="selectize-close-btn" value="status in exception">
                    </div>
                    {include file="./shipment-list.tpl"}
                </div>
                <div class="tab-pane" id="fail-b1">
                    {include file="./shipment-filter-bar.tpl"}
                    {include file="./shipment-list.tpl"}
                </div>
                <div class="tab-pane" id="expired-b1">
                    {include file="./shipment-filter-bar.tpl"}
                    {include file="./shipment-list.tpl"}
                </div>
                <div class="tab-pane" id="outfordeli-b1">
                    {include file="./shipment-filter-bar.tpl"}
                    {include file="./shipment-list.tpl"}
                </div>
                <div class="tab-pane" id="delivered-b1">
                    {include file="./shipment-filter-bar.tpl"}
                    {include file="./shipment-list.tpl"}
                </div>
                <div class="tab-pane" id="pending-b1">
                    {include file="./shipment-filter-bar.tpl"}
                    {include file="./shipment-list.tpl"}
                </div>
            </div>

        </div>
    </div>


{/block}