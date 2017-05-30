<!DOCTYPE html>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WS8WXNP');</script>
    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44475301 = new Ya.Metrika({
                    id:44475301,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44475301" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <meta charset="utf-8"/>
{{--<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]"/>--}}

@yield('seo')

<!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
          rel="stylesheet" type="text/css"/>

    <!-- CORE CSS -->
    <link href="{{asset('smarty/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- THEME CSS -->
    <link href="{{asset('smarty/css/essentials.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('smarty/css/layout.css')}}" rel="stylesheet" type="text/css"/>

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="{{asset('smarty/css/header-1.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('smarty/css/layout-shop.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('smarty/css/color_scheme/pink.css')}}" rel="stylesheet" type="text/css" id="color_scheme"/>
    <link rel="stylesheet" href="{{asset('smarty/css/plugin-hover-buttons.css')}}">
    <link rel="stylesheet" href="{{asset('smarty/css/other.css')}}">

    <script type="text/javascript" src="//vk.com/js/api/openapi.js?142"></script>

    <meta name="yandex-verification" content="5be6705cc9de7de0" />
</head>

<body {{--data-background="https://pp.vk.me/c626417/v626417735/37f2d/dnxbA9ATs8Y.jpg"--}} class="{{--boxed--}}  @if(Setting::get('view.theme_smoothscroll')) smoothscroll @endif enable-animation {{Setting::get('view.theme_color')}} ">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WS8WXNP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 87459155, {widgetPosition: "left",disableExpandChatSound: "1",tooltipButtonText: "Есть вопросы?"});
</script>
<!-- VK Widget -->

<!-- wrapper -->
<div id="wrapper">

    <!-- Top Bar -->
    <div id="topBar">
        <div class="container">

            <!-- right -->
            <ul class="top-links list-inline pull-right">
                @if(Auth::check())
                    <li class="text-welcome hidden-xs">{{trans('layout.welcome_to')}} {{Setting::get('config.sitename', 'SiteName')}}
                        ,
                        <strong>{{Auth::user()->name}}</strong>
                    </li>
                    <li>
                        <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i
                                    class="fa fa-user hidden-xs"></i>{{mb_strtoupper(trans('layout.my_account'))}}</a>
                        <ul class="dropdown-menu pull-right">
                            <li><a tabindex="-1" href="{{url('/profile/settings')}}"><i
                                            class="fa fa-cog"></i> {{mb_strtoupper(trans('layout.my_settings'))}}</a>
                            </li>
                            <li><a tabindex="-1" href="{{url('/profile/coupons')}}"><i
                                            class="fa fa-ticket"></i> {{mb_strtoupper(trans('layout.my_coupons'))}}</a>
                            </li>
                            <li><a tabindex="-1" href="{{url('/profile/orders')}}"><i
                                            class="fa fa-archive"></i> {{mb_strtoupper(trans('layout.my_orders'))}}</a>
                            </li>
                            <li><a tabindex="-1" href="{{url('/profile/favourites')}}"><i
                                            class="fa fa-star"></i> {{mb_strtoupper(trans('layout.my_favourites'))}}</a>
                            </li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="{{url('/logout')}}"><i
                                            class="glyphicon glyphicon-off"></i>{{mb_strtoupper(trans('layout.exit'))}}
                                </a></li>
                        </ul>
                    </li>
                @else
                    <li class="hidden-xs"><a href="{{url('/login')}}">{{trans('layout.login')}}</a></li>
                    <li class="hidden-xs"><a href="{{url('/registration')}}">{{trans('layout.registration')}}</a></li>
                @endif

            </ul>

            <!-- left -->
            <ul class="top-links list-inline">
                <!-- <li class="hidden-xs"><a href="page-faq-1.html">FAQ</a></li> -->
                <!-- <li>
                    <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang"
                                                                                                      src="
@if(Auth::check() && Auth::user()->locale !== null){{asset('smarty/images/flags/'.Auth::user()->locale.'.png')}}@elseif(Session::get('locale') != ''){{asset('smarty/images/flags/'.Session::get('locale').'.png')}}@else{{asset('smarty/images/flags/'.Config::get('app.locale').'.png')}}@endif"
                                                                                                      width="16"
                                                                                                      height="11"
                                                                                                      alt="lang"/>
                        @if(Auth::check() && Auth::user()->locale !== ''){{mb_strtoupper(Auth::user()->locale)}}@elseif(Session::get('locale') != ''){{mb_strtoupper(Session::get('locale'))}} @else
                            {{Config::get('app.locale')}} @endif</a>
                    <ul class="dropdown-langs dropdown-menu">
                        @foreach(\larashop\Language::all() as $language)
                            <li><a tabindex="-1" href="{{url('/setlocale/'.$language->code)}}"><img class="flag-lang"
                                                                                                    src="{{asset('smarty/images/flags/'.$language->code.'.png')}}"
                                                                                                    width="16"
                                                                                                    height="11"
                                                                                                    alt="lang"/> {{$language->name}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li> -->
                {{--<li>--}}
                    {{--<a class="dropdown-toggle no-text-underline" data-toggle="dropdown"--}}
                       {{--href="#">@if(Auth::check() && Auth::user()->currency !== null){{Auth::user()->currency}}@elseif(Session::get('currency') !=''){{Session::get('currency')}} @else--}}
                            {{--USD @endif</a>--}}
                    {{--<ul class="dropdown-langs dropdown-menu">--}}
                        {{--<li><a tabindex="-1" href="{{url('/setcurrency/USD')}}">USD</a></li>--}}
                        {{--<li><a tabindex="-1" href="{{url('/setcurrency/UAH')}}">UAH</a></li>--}}
                        {{--<li><a tabindex="-1" href="{{url('/setcurrency/RUB')}}">RUB</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>

        </div>
    </div>
    <div id="header" class="sticky clearfix">


        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- BUTTONS -->
                <ul class="pull-right nav nav-pills nav-second-main">

                    <!-- SEARCH -->
                    <li class="search">
                        <a href="javascript:;">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box">
                            <form action="{{url('/search')}}" method="get">
                                <div class="input-group">
                                    <input type="text" name="keyword" placeholder="{{trans('layout.search')}}"
                                           class="form-control" required/>
                                    <span class="input-group-btn">
												<button class="btn btn-primary"
                                                        type="submit">{{trans('layout.search')}}</button>
											</span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- /SEARCH -->


                @if(!Request::is('checkout'))
                    <!-- QUICK SHOP CART -->

                        <li class="quick-cart">
                            <a href="#">
                                <span class="badge badge-aqua btn-xs badge-corner count_order"></span>
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                            <div class="quick-cart-box">
                                <h4>{{trans('layout.cart')}}</h4>


                                <div class="quick-cart-wrapper">

                                </div>

                                <!-- quick cart footer -->
                                <div class="quick-cart-footer">
                                                                        <span style="width: 100%;margin-bottom: 5px; text-align: center"><strong>{{trans('layout.total')}}
                                                                                :</strong> <span
                                                                                    id="total-price"></span></span>
                                    <a href="{{url('checkout')}}"
                                       class="btn btn-primary btn-xs">{{trans('layout.checkout')}}</a>

                                </div>
                                <!-- /quick cart footer -->
                            </div>
                        </li>
                        <!-- /QUICK SHOP CART -->
                    @endif
                </ul>
                <!-- /BUTTONS -->

                <!-- Logo -->
                <a class="logo pull-left" href="{{url('/')}}">
                    <img src="{{ asset('/files/img/'.Setting::get('config.logo'))}}" alt=""/>
                </a>

                <!--
                    Top Nav

                    AVAILABLE CLASSES:
                    submenu-dark = dark sub menu
                -->
                <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                    <nav class="nav-main">

                        <!--
                            NOTE

                            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                            Direct Link Example:

                            <li>
                                <a href="#">HOME</a>
                            </li>
                        -->
                        <ul id="topMain" class="nav nav-pills nav-main">
                           
                            <li>
                                <a href="{{url('/')}}">{{mb_strtoupper(trans('layout.home'))}}</a>
                            </li>
                            <li>
                                <a href="{{url('/catalog')}}">{{mb_strtoupper(trans('layout.catalog'))}}</a>
                            </li>

                            @foreach(\larashop\Classes::orderBy('sort_id')->get() as $navbar_class)
                                <li class="dropdown"><!-- HOME -->
                                    <a class="dropdown-toggle" href="{{url('/'.$navbar_class->urlhash)}}">
                                        {{mb_strtoupper($navbar_class->description->name)}}
                                    </a>
                                    <ul style="min-width: 246px;" class="dropdown-menu">
                                        <li class="navbar_products"
                                            style="display: inline-block; width: 120px; height: 140px;"><a
                                                    style="text-align: center;height: 140px;"
                                                    href="{{ url('catalog/'.$navbar_class->urlhash) }}">{{trans('all.all')}}
                                                <br>
                                                <img src="{{asset('files/classes/img/'.$navbar_class->cover)}}"
                                                     style="max-width: 100px;height: 100px" alt=""></a></li>
                                        @foreach(\larashop\Categories::orderBy('sort_id')->get() as $cat)
                                            @if($cat->class_id == $navbar_class->id)
                                                <li style="display: inline-block;width: 120px;height: 140px;"
                                                    class="dropdown navbar_products">
                                                    <a style="text-align: center;height: 140px;"
                                                       href="{{url('/catalog/'.$navbar_class->urlhash.'/'.$cat->urlhash)}}">
                                                        {{$cat->description->name}}
                                                        <br>
                                                        <img src="{{asset('/files/cats/img/'.$cat->cover)}}"
                                                             style="width: 100px; height: 100px" alt=""></a></li>
                                                </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach


                        </ul>


                    </nav>

                </div>

            </div>

        </header>
        <!-- /Top Nav -->

    </div>

@yield('page')

<!-- FOOTER -->
    <footer id="footer">
        <div class="container">

            <div class="row margin-top-60 margin-bottom-40 size-13">

                <!-- col #1 -->
                <div class="col-md-4 col-sm-4">

                    <!-- Footer Logo -->
                    <img class="footer-logo" src="{{ asset('/files/img/'.Setting::get('config.logo'))}}" alt=""/>

                    <p>
                        {{Setting::get('config.sitedesc')}}
                    </p>

                    <!-- Social Icons -->
                    <div class="clearfix">

                        <a target="_blank" href="{{Setting::get('integration.vkontakte')}}"
                           class="social-icon social-icon-sm social-icon-border social-vk pull-left"
                           data-toggle="tooltip" data-placement="top" title="Вконтакте">
                            <i class="icon-vk"></i>
                            <i class="icon-vk"></i>
                        </a>

                        <a target="_blank" href="{{Setting::get('integration.insta')}}"
                           class="social-icon social-icon-sm social-icon-border social-instagram pull-left"
                           data-toggle="tooltip" data-placement="top" title="Instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>

                    </div>
                    <!-- /Social Icons -->

                </div>
                <!-- /col #1 -->

                <!-- col #2 -->
                <div class="col-md-8 col-sm-8">

                    <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs">
                            <h4 class="letter-spacing-1">{{mb_strtoupper(trans('layout.explore_us'))}}</h4>
                            <ul class="list-unstyled footer-list half-paddings noborder">
                                <li><a class="block" href="{{url('/')}}"><i
                                                class="fa fa-angle-right"></i> {{trans('layout.home_page')}}</a></li>
                                <li><a class="block" href="{{url('/catalog')}}"><i
                                                class="fa fa-angle-right"></i> {{trans('layout.catalog_page')}}</a></li>
                                <li><a class="block" href="{{url('/profile/settings')}}"><i
                                                class="fa fa-angle-right"></i> {{trans('layout.my_settings')}}</a></li>
                                <li><a class="block" href="{{url('/profile/orders')}}"><i
                                                class="fa fa-angle-right"></i> {{trans('layout.my_orders')}}</a></li>
                                <li><a class="block" href="{{url('/profile/coupons')}}"><i
                                                class="fa fa-angle-right"></i> {{trans('layout.my_coupons')}}</a></li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h4 class="letter-spacing-1">{{mb_strtoupper(trans('layout.secure_payment'))}}</h4>
                            <p>{{trans('layout.secure_payment_content')}}</p>
                        </div>

                        <div class="col-md-4">
                            <h2>{{Setting::get('integration.tel')}}</h2>
                            <h2>{{Setting::get('config.email')}}</h2>
                        </div>

                    </div>

                </div>
                <!-- /col #2 -->

            </div>

        </div>

        <div class="copyright">
            <div class="container">
             
                &copy; {{trans('layout.all_right')}}
            </div>
        </div>

    </footer>
    <!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = '/smarty/plugins/';</script>
<script type="text/javascript" src="{{asset('smarty/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('plugins/jquery.cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('dist/js/cart.js')}}"></script>
<script type="text/javascript" src="{{asset('smarty/js/scripts.js')}}"></script>

<!-- jQuery UI 1.11.4 -->
{!! Html::script('dist/js/jquery-ui.min.js') !!}
<!-- Bootstrap 3.3.5 -->
{!! Html::script('bootstrap/js/bootstrap.min.js') !!}
<!-- Select2 -->
{!! Html::script('plugins/select2/select2.full.min.js') !!}
{!! Html::script('plugins/touchspin/jquery.bootstrap-touchspin.min.js') !!}
<!-- Select2 -->
{!! Html::script('plugins/select2/select2.full.min.js') !!}

<!-- STYLESWITCHER - REMOVE -->
{{--<script async type="text/javascript" src="{{asset('smarty/plugins/styleswitcher/styleswitcher.js')}}"></script>--}}
<script>
    $(window).resize(function () {
        $('.product-attr').css('width', '100%');
    });

</script>

@yield('scripts')
<!-- PAGE LEVEL SCRIPTS -->
{{--<script type="text/javascript" src="{{asset('smarty/js/view/demo.shop.js')}}"></script>--}}
</body>
</html>