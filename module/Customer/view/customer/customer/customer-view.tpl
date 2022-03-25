{extends '../../../../Template/layout/frontend/billing-main-layout.tpl'}
{block 'content'}

{include file='./customer-detail.tpl'}
<div>
    <div class="card">
        <div class="card-body">

            <ul class="nav nav-tabs nav-bordered nav-justified">
                <li class="nav-item">
                    <a href="#Courier-list" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                        Courier List
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#API-informatioin" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        API Information
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#Invoice" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Invoice
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#Transaction-List" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Transaction List
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#Customer-Detail" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                        Customer Detail
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                {include file="./customer-courier-list.tpl"}
                {include file="./customer-api-list.tpl"}
                {include file="./customer-invoice-list.tpl"}
            </div>



        </div>
    </div>
</div>

{/block}