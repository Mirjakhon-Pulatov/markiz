@extends('layout.app')
@section('style')

@endsection
@section('content')

    <section class="ttm-row pt-50 pb-280 ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <img style="width: 570px; height: auto;" class="img-thumbnail" height="auto"
                         src="{{ asset('public/asset/images/consult1.jpg') }}" alt="#">
                </div>
                <div class="col-sm-6">
                    <h4 class="text-center">Консультация</h4>
                    <p class="text-justify">Каждый дом (объект) - особенный и требует индивидуального подхода при выборе
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
                            <ul class="ttm-list">
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

    <section class="ttm-row bg-layer pt-0 pb-0 ttm-textcolor-white mt_175 res-991-mt-0 res-991-pt-0 clearfix">
        <div class="container">
            <div class="row row-equal-height">
                <div class="col-lg-6">
                    <div class="ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-skincolor pt-50 pb-45 pl-15">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <h4 style="margin-top: 50px; ">Своевременная и бережная доставка</h4>

                            <p>Перед погрузкой все изделия упаковываются, что предохраняет Ваш заказ от загрязнения при
                                транспортировке. Наша машина оснащена поддоном, который предохраняет готовую продукцию
                                от повреждения при загрузке и перевозке</p>
                            <p>* Стоимость доставки зависит от удаленности объекта заказчика от склада компании и от
                                массы груза.
                                <br>
                                ** Доставляем заказы во все регионы Узбекистана при посредничестве транспортных
                                компаний.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div
                        class=" ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-skincolor spacing-8 width-100 clearfix">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="post-image" style="margin-top: 55px;">
                                <img class="img-thumbnail" src="{{ asset('public/asset/images/dostavka1.jpg') }}"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ttm-row pt-50 pb-0 res-991-pt-0 res-991-pb-0 clearfix" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class="post-image">
                        <img class="img-thumbnail" src="{{ asset('public/asset/images/shefmontaj.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <h4 style="margin-bottom: 20px;">Монтаж и установка</h4>

                    <p style="line-height: 40px" class="text-justify">Установка и монтаж маркиз и пергол производится в
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
