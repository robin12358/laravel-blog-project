<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{env('PUBLIC_PATH')}}/admin_resources/assets/images/favicon.png">

    <link href="{{env('PUBLIC_PATH')}}/admin_resources/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->

    <link href="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{env('PUBLIC_PATH')}}/admin_resources/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>



    <link href="{{env('PUBLIC_PATH')}}///ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/hot-sneaks/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->



@include('admin.layouts.main_menu')

@include('admin.layouts.sidebar')
<!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
@yield('content')
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script> var baseURL = '{{url('/')}}'</script>
<script> var token = '{{csrf_token()}}'</script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{env('PUBLIC_PATH')}}/admin_resources/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{env('PUBLIC_PATH')}}/admin_resources/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="{{env('PUBLIC_PATH')}}/admin_resources/dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/flot/excanvas.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/flot/jquery.flot.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/flot/jquery.flot.pie.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/flot/jquery.flot.time.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/flot/jquery.flot.stack.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="{{env('PUBLIC_PATH')}}/admin_resources/dist/js/pages/chart/chart-page-init.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
@yield('script')
</body>

</html>