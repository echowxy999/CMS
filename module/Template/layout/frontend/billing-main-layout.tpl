<!DOCTYPE html>
<html lang="en">
{include file='./share/billing-share-header.tpl'}

<!-- body start -->
<body class="loading">

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    {include file='./share/billing-share-topbar.tpl'}
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    {include file='./share/billing-share-sidebar.tpl'}
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                {include file='./share/billing-share-pagetitle.tpl'}
                <!-- end page title -->



                                {block 'content'}{/block}


                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Footer Start -->
        {include file='./share/billing-share-footer.tpl'}
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


{include file="./share/billing-share-js.tpl"}

</body>
</html>