@extends('layout.app')
@section('seo')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте">
    <meta name="keywords"
          content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте">
    <meta name="description" content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте">
    <meta name="author" content="https://www.markiz.uz/">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Галерея | Markiz.uz</title>

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.markiz.uz">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте.">
    <meta property="og:description" content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте">
    <meta property="og:image" content="{{ asset('public/asset/images/site-icon.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="markiz.uz">
    <meta property="twitter:url" content="https://www.markiz.uz">
    <meta name="twitter:title" content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте.">
    <meta name="twitter:description" content="Маркизы, перголы, шатры, зонты, навесы и тенты в Ташкенте
    ">
    <meta name="twitter:image" content="{{ asset('public/asset/images/site-icon.png') }}">

    <!-- Meta Tags Generated via https://www.opengraph.xyz -->
@endsection
@section('style')

    <link rel="stylesheet" href="{{ asset('public/asset/lightGallery/css/lightgallery-bundle.css') }}"/>
    <style>
        .picture {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-content: center;
            align-items: center;
        }

        .picture img {
            padding: 15px;
            width: 370px;
            height: 300px;
        }

        .lg-sub-html {
            display: none !important;
        }
    </style>
@endsection
@section('content')

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row pt-60 pb-140 res-991-pb-100 ttm-bgcolor-grey clearfix">
            <div class="container" style="margin-bottom: 50px">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BsfDkdoTy0s"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-tabs">
                            <ul class="tabs text-right">

                                @php
                                    $albums = \Illuminate\Support\Facades\DB::select("select id, title FROM albums ");
                                @endphp
                                @foreach($albums as $album)
                                    <li class="tab @if($album->id == 1){{ "active" }} @endif"><a
                                            href="#">{{ $album->title }}</a></li>
                                @endforeach


                            </ul><!-- flat-tab end -->
                            <div class="content-tab pt-20">
                                <!-- content-inner -->
                                @foreach($albums as $album2)
                                    <div class="content-inner">
                                        <div class="picture" id="photos">
                                            @php
                                                $getPhotos = \Illuminate\Support\Facades\DB::select("SELECT file FROM `gallerys` where album_id = '$album2->id' ");
                                            @endphp
                                            @if(count($getPhotos) > 0)
                                                @foreach($getPhotos as $photoitem)
                                                    <a id="img"
                                                       href="{{ asset('public/uploads/gallery/photos/'.$photoitem->file) }}">
                                                        <img
                                                            src="{{ asset('public/uploads/gallery/thumbnails/'.$photoitem->file) }}"
                                                            alt="{{$photoitem->file}}"></a>
                                                @endforeach
                                            @endif
                                        </div><!-- row end -->
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>


    </div><!--site-main end-->
@endsection
@section('scripts')
    <script src="{{ asset('public/asset/lightGallery/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('public/asset/lightGallery/js/lg-zoom.min.js') }}"></script>
    <script src="{{ asset('public/asset/lightGallery/js/lg-thumbnail.min.js') }}"></script>
    <script src="{{ asset('public/asset/lightGallery/js/lg-fullscreen.min.js') }}"></script>
    <script src="{{ asset('public/asset/lightGallery/js/lg-autoplay.min.js') }}"></script>
    <script type="text/javascript">
        // Предположим, что у вас есть элементы с классом 'photos'
        var elements = document.getElementsByClassName('picture');

        // Проходимся по элементам (предполагая, что их может быть несколько)
        Array.from(elements).forEach(function (element) {
            lightGallery(element, {
                plugins: [lgZoom, lgThumbnail, lgFullscreen, lgAutoplay],
                speed: 500,
                subHtml: '',
                // ... другие настройки
            });
        });

    </script>

@endsection
