<!--header start-->
<header id="masthead" class="header ttm-header-style-classic">
    <!-- ttm-topbar-wrapper -->
    <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="container">
            <div class="ttm-topbar-content">
                <ul class="top-contact ttm-bgcolor-darkgrey-left text-left">
                    <li><i class="fa fa-phone"></i><strong class="ttm-textcolor-skincolor">Ежедневно с 9:00 до 21:00:</strong> <span class="tel-no">
                            +998 91 135-12-45, +998 91 135-00-71</span></li>
                </ul>
                <div class="topbar-right text-right">
                    <ul class="top-contact">
                        <li><i class="fa fa-envelope-o"></i><strong>Email: </strong><a
                                href="mailto:info@markiz.uz">info@markiz.uz</a></li>
                    </ul>
                    <div class="ttm-social-links-wrapper list-inline">
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/soyabonchi/"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://ok.ru/group/55172595056799"><i class="fa fa-odnoklassniki"></i></a>
                            </li>
                            <li><a href="https://vk.com/markiza_uz"><i class="fa fa-vk"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ttm-topbar-wrapper end -->
    <!-- ttm-header-wrap -->
    <div class="ttm-header-wrap">
        <!-- ttm-stickable-header-w -->
        <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
            <div id="site-header-menu" class="site-header-menu">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!-- site-branding -->
                        <div class="site-branding">
                            <a class="home-link" href="{{ url('/') }}" title="Boldman" rel="home">
                                <img id="logo-img" class="img-center"
                                     src="{{ asset('public/asset/images/markiz-new-logo.png') }}" alt="logo-img">
                            </a>
                        </div><!-- site-branding end -->
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">
                            <div class="header-btn">
                                <a class=" ttm-btn-size-md ttm-btn-shape  ttm-btn-color-black"
                                   href="mailto:info@markiz.uz"><i class="fa fa-envelope-o"></i> info@markiz.uz</a>
                            </div>

                            <div class="ttm-menu-toggle">
                                <input type="checkbox" id="menu-toggle-form">
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown">
                                    <li><a href="index.html" style="color: {{request()->is('') ? 'orange' : ''}}">Каталог</a>
                                        <ul>
                                            <li><a href="plumber/index.htm"> plumber </a></li>
                                            <li><a href="pest-control/index.htm"> pest control </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Услуги</a></li>
                                    <li><a href="{{ url('/gallery') }}" style="color: {{request()->is('gallery') ? '#FF7D27' : ''}}">Галерея</a></li>
                                    <li><a href="{{ url('/about') }}" style="color: {{request()->is('about') ? '#FF7D27' : ''}}">О нас</a></li>
                                    <li><a href="{{ url('/contact') }}" style="color: {{request()->is('contact') ? '#FF7D27' : ''}}">Контакты</a></li>
                                </ul>
                            </nav>
                        </div><!-- site-navigation end-->
                    </div>
                </div>
            </div>
        </div><!-- ttm-stickable-header-w end-->
    </div><!--ttm-header-wrap end -->
</header>
<!--header end-->