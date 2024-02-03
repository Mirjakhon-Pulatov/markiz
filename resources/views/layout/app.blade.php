<!DOCTYPE html>
<html lang="en">

<head>
    @yield('seo')
    @include('blocks.top-css')
    @yield('style')
</head>

<body>

<!--page start-->
<div class="page">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->

    <!-- navbar start -->
    @include('blocks.navbar')
    <!-- navbar end -->

    @yield('content')


    <!--footer start-->
    @include('blocks.footer')
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->


</div><!-- page end -->


<!-- Javascript -->
@include('blocks.footer-scripts')
<!-- Javascript end-->
@yield('scripts')
</body>

</html>
