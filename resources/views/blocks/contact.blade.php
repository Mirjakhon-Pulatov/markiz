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
    <title>Контакты | Markiz.uz</title>

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
    <style>
        @media (max-width: 980px) {
            #contact_row {
                margin-top: 100px;
            }
        }
    </style>

@endsection

@section('content')
    <!--site-main start-->
    <div class="site-main">

        <div class="ttm-row map-section ttm-bgcolor-white">
            <div class="map-wrapper" style="height: 400px">
                <div id="map_canvas">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d5992.842660402797!2d69.31093485571331!3d41.321450679709585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0KLQsNGI0LrQtdC90YIsINGD0LsuINCc0YPRgdGC0LDQutC40LvQu9C40LosINC00L7QvCAzOA!5e0!3m2!1sru!2s!4v1581939346436!5m2!1sru!2s"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>

        <section class="ttm-row pb-160 res-991-pb-100 clearfix">
            <div class="container">
                <div class="row" id="contact_row">
                    <div class="col-md-7 pr-60 res-767-pr-15">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">Форма обратной связи</h2>
                            </div>
                            <div class="title-desc">Производим и устанавливаем
                                маркизы и переголы с 2017 года.
                            </div>
                        </div><!-- section title end -->
                        <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post"
                              action="{{ route('contact_form') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i><input
                                                name="your-name" type="text" value="" placeholder="Имя"
                                                required="required"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i><input
                                                name="your-phone" type="text" value="" placeholder="Тел. номер"
                                                required="required"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input
                                                name="email" type="email" value="" placeholder="Эл. почта"
                                                required="required"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-location-pin"></i><input
                                                name="venue" type="text" value="" placeholder="Адрес"
                                                required="required"></span>
                                    </label>
                                </div>
                            </div>
                            <label>
                                <span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i><textarea
                                        name="message" cols="40" placeholder="Сообщение"
                                        required="required"></textarea></span>
                            </label>
                            <input type="submit" id="submit"
                                   class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black"
                                   value="Отправить">
                        </form>
                    </div>
                    <div class="col-md-5">
                        <div class="ttm-rounded-shadow-box pt-40 pr-50 pb-55 pl-50 box-shadow2 res-767-mt-40 clearfix">
                            <h4>Контактная информация</h4>
                            <ul class="ttm_contact_widget_wrapper">
                                <li><i class="ttm-textcolor-skincolor ti ti-location-pin text-justify"></i>Республика
                                    Узбекистан, город Ташкент, ул. Мустакиллик, дом 38<br>“Savdo texnika”, 2 этаж.
                                </li>
                                <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>+998 91 135-00-71
                                    <br>+998 91 135-00-72
                                </li>
                                <li><i class="ttm-textcolor-skincolor ti ti-comment"></i><a
                                        href="mailto:info@boldman.com"> info@markiz.uz <br> muhidinmuradov1962@gmail.com</a>
                                </li>
                                <li><i class="ttm-textcolor-skincolor ti ti-world"></i><a href="http://www.markiz.uz">http://www.markiz.uz</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>

    </div>
    <!--site-main end-->
@endsection

@section('scripts')

@endsection
