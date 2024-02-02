@extends('layout.app')
@section('style')

@endsection
@section('content')
    <!--error-404 start-->
    <section class="error-404 bg-img3">
        <div class="ttm-big-icon ttm-textcolor-skincolor">
            <i class="fa fa-exclamation-triangle"></i>
        </div>
        <header class="page-header"><h1 class="page-title">404</h1></header>
        <header class="page-header"><h3 class="page-title">Страница не найдена</h3></header>
        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-15 text-uppercase"
           href="{{ url('/') }}">На главную</a>
    </section>
    <!--error-404 end-->
@endsection
@section('scripts')

@endsection
