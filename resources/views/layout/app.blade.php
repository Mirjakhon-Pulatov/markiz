<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте">
    <meta name="keywords"
          content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте">
    <meta name="description" content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте">
    <meta name="author" content="https://www.markiz.uz/">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте.</title>

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
