@extends('layout.app')
@section('style')

    <link rel="stylesheet" href="{{ asset('public/asset/css/lightgallery.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('public/asset/css/lg-transitions.css') }}"/>
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

    </style>
@endsection
@section('content')

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row pt-60 pb-140 res-991-pb-100 ttm-bgcolor-grey clearfix">
            <div class="container" style="margin-bottom: 50px">
                <iframe width="500" height="500" src="https://www.youtube.com/embed/BsfDkdoTy0s"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen=""></iframe>
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
                                        <div class="picture">
                                            @php
                                                $getPhotos = \Illuminate\Support\Facades\DB::select("SELECT file FROM `gallerys` where album_id = '$album2->id' ");
                                            @endphp
                                            @if(count($getPhotos) > 0)
                                                @foreach($getPhotos as $photoitem)
                                                    <a id="img"
                                                       href="{{ asset('public/uploads/gallery/photos/'.$photoitem->file) }}">
                                                        <img
                                                            src="{{ asset('public/uploads/gallery/thumbnails/'.$photoitem->file) }}"
                                                            alt="image"></a>
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
