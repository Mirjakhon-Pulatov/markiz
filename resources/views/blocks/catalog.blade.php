@extends('layout.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('public/asset/css/lightgallery.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/asset/css/lg-transitions.css') }}"/>
    <style>
        body .site-main {
            padding-top: 0px !important;
        }

        .picture {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            align-content: center;
            align-items: center;
        }

        .picture img {
            padding: 10px;
            width: 100%;
            height: auto;
        }

        .picture a {
            width: 49% !important;
        }


        @media only screen and (max-width: 600px) {
            .picture a {
                width: 100% !important;
            }
        }
    </style>
@endsection
@section('content')
    @foreach($all as $service) @endforeach
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ $service->title }}</h1>
                        </div><!-- /.page-title-captions -->
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div
                        class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            @php
                                $all_services = \Illuminate\Support\Facades\DB::select("Select * from services");
                            @endphp
                            @if( count($all_services) > 0 )
                                <ul class="widget-menu">
                                    @foreach($all_services as $all_service)
                                        <li class="tab @if(request()->route('slug') == $all_service->slug){{ "active" }} @endif">
                                            <a
                                                href="{{ route('catalog', ['slug' => $all_service->slug]) }}">{{ $all_service->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </aside>
                    </div>
                    <div class="col-lg-9 content-area">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <!-- section title -->
                            <div class="section-title without-sep-line clearfix">
                                @php
                                    $body1 = html_entity_decode($service->body);
                                    echo $body1;
                                @endphp
                            </div><!-- section title end -->
                            @php
                                $images = \Illuminate\Support\Facades\DB::select("Select * from extra_images where `code` = '$service->id' ");
                                $Images_files = [];
                            @endphp
                            @foreach($images as $image)
                                @php
                                    $extra_images = \Illuminate\Support\Facades\DB::select("Select `file` from gallerys where `id` = '$image->image_id' ");
                                    array_push($Images_files, $extra_images[0]->file);
                                @endphp
                            @endforeach
                            <div class="content-inner mt-4">
                                <div class="picture">

                                    @foreach($Images_files as $image_item)
                                        <a
                                            href="{{ asset('public/uploads/gallery/photos/'.$image_item) }}">
                                            <img
                                                src="{{ asset('public/uploads/gallery/thumbnails/'.$image_item) }}"
                                                alt="image"></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div><!--site-main end-->

@endsection
@section('scripts')
    <script src="{{ asset('public/asset/js/lightgallery-all.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.picture').lightGallery({
                mode: 'lg-slide-circular',
                download: false
            });
        });
    </script>
@endsection
