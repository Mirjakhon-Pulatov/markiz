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
    <title>Сервисы | Markiz.uz</title>

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
    #sect{
        background-color: #FF7F27 !important;
    }
</style>
@endsection
@section('content')

    <section class="ttm-row pt-50 pb-280 ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <img style="width: 570px; height: auto;" class="img-thumbnail" height="auto"
                         src="{{ asset('public/asset/images/markiz-consult.jpg') }}" alt="markiz-consult">
                </div>
                <div class="col-sm-6">
                    <h4 class="text-center">Консультация</h4>
                    <p class="text-justify" style="height: auto; word-spacing: 2px; letter-spacing: 1px;">Каждый дом (объект) - особенный и требует индивидуального подхода при выборе
                        проекта. Наши
                        специалисты расскажут о новейших материалах для маркиз, помогут с выбором продукции с учетом
                        ваших пожеланий и возможностей. Внимание к вашим желаниям, пунктуальность, вежливость и
                        профессионализм отличают наших специалистов при проектировании и строительстве.
                    </p>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h5 class="text-left" style="margin-bottom: 1px"> С менеджером-консультантом вы можете
                                обсудить:</h5>
                        </div>
                        <div class="col-md-12">
                            <ul class="ttm-list" >
                                <li>
                                    <i class="ttm-textcolor-skincolor fa fa-check"></i>
                                    Вид внешний вид, которую вы хотите выбрать;
                                </li>
                                <li>
                                    <i class="ttm-textcolor-skincolor fa fa-check"></i>
                                    Конструкцию вашего Маркиза;
                                </li>
                                <li>
                                    <i class="ttm-textcolor-skincolor fa fa-check"></i>
                                    Договориться о выезде специалиста на замер;
                                </li>
                                <li>
                                    <i class="ttm-textcolor-skincolor fa fa-check"></i>
                                    Получить расчет и проектную документацию БЕСПЛАТНО.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ttm-row bg-layer pt-0 pb-0 ttm-textcolor-white mt_175 res-991-mt-0 res-991-pt-0 clearfix" id="sect">
        <div class="container" >
            <div class="row row-equal-height"  >
                <div class="col-lg-6">
                    <div class=" ttm-bg ttm-left-span  pt-50 pb-45 pl-15">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content" style="height: auto; word-spacing: 2px; letter-spacing: 1px;">
                            <h4>Своевременная и бережная доставка</h4>
                            <p class="text-justify">Перед погрузкой все изделия упаковываются, что предохраняет Ваш
                                заказ от загрязнения при
                                транспортировке. Наша машина оснащена поддоном, который предохраняет готовую продукцию
                                от повреждения при загрузке и перевозке</p>
                            <p class="text-justify">* Стоимость доставки зависит от удаленности объекта заказчика от
                                склада компании и от
                                массы груза.
                                <br>
                                ** Доставляем заказы во все регионы Узбекистана при посредничестве транспортных
                                компаний.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class="  ttm-bg ttm-left-span  spacing-8 width-100 clearfix">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content" style="height: auto">
                            <div class="post-image" style="margin-top: 50px;">
                                <img class="img-thumbnail" src="{{ asset('public/asset/images/markiz-delivery.jpg') }}"
                                     alt="markiz-delivery">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ttm-row pt-50 pb-0 res-991-pt-0 res-991-pb-0 clearfix"
             style="margin-top: 40px; margin-bottom: 50px;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="post-image">
                        <img class="img-thumbnail" src="{{ asset('public/asset/images/markiz-install.jpg') }}"
                             alt="markiz-install">
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <h4 style="margin-bottom: 20px;">Монтаж и установка</h4>

                    <p style="height: auto; word-spacing: 2px; letter-spacing: 1px;" class="text-justify">Установка и монтаж маркиз и пергол производится в
                        день доставки. В зависимости от размера изделия
                        и общего объема работ, монтажные работы могут занимать от 1 до 3х дней. Работы производятся
                        нашими специалистами, имеющими многолетний опыт работы по установке солнцезащитных систем.</p>

                </div>
            </div>

        </div>
    </section>

@endsection
@section('scripts')
@endsection
