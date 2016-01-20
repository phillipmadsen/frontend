<!DOCTYPE html>
<html dir="ltr" lang="en" @yield('schematag')>
<head>

@yield('seo')

@yield('jsonschema')

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="The Grace Company" />
<link rel="stylesheet" href="{!! asset('/live/css/bootstrap.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/css/font-awesome.min.css' !!}">
<link rel="stylesheet" href="{!! asset('/live/css/ionicons.min.css' !!}">
<link rel="stylesheet" href="{!! asset('/live/style.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/css/dark.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/css/font-icons.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/css/animate.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/css/magnific-popup.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/custom-css/big-table.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/custom-css/header.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/custom-css/block.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/custom.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/custom-css/custom.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/live/css/responsive.css') !!}" type="text/css" />

@yield('styles')


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- External JavaScripts ============================================= -->
    
<script type="text/javascript" src="{!! asset('/live/js/jquery.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/live/js/plugins.js') !!}"></script>

@yield('scripts')
@yield('ppscripts')

    <!-- Document Title ============================================= --> 
    
    <title>@yield('title', 'The Grace Company' )</title>






</head><!--/head-->

<body class="@yield('bodytag') stretched">
<!-- Document Wrapper ============================================= -->
    <div id="wrapper" class="clearfix">
    @yield('top')
@section('header')
   <!-- Header ============================================= -->
    <header id="header" class="transparent-header semi-transparent dark full-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo ============================================= -->
                <div id="logo">
                    <a href="{!! url('/' . getLang()) !!}" class="standard-logo" data-dark-logo="{!! asset('live/images/grace-logo-light.png') !!}">
                    <img src="{!! asset('/live/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                    <a href="{!! url('/' . getLang()) !!}" class="retina-logo" data-dark-logo="{!! asset('live/images/grace-logo-light.png') !!}">
                    <img src="{!! asset('/live/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                </div><!-- #logo end -->



                <!-- Primary Navigation ============================================= -->
                <nav id="primary-menu" role="navigation">
                                @include('live/layout/menu')

                    <!-- Top Cart ============================================= -->
         {{--            <div id="top-cart">
                        <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#">
                                        {!! HTML::image('live/images/shop/small/1.jpg', 'ALT TEXT') !!}
                                        </a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Blue Round-Neck Tshirt</a>
                                        <span class="top-cart-item-price">$19.99</span>
                                        <span class="top-cart-item-quantity">x 2</span>
                                    </div>
                                </div>
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#">
                                       {!! HTML::image('live/images//shop/small/6.jpg', 'ALT TEXT') !!}
                                       </a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Light Blue Denim Dress</a>
                                        <span class="top-cart-item-price">$24.99</span>
                                        <span class="top-cart-item-quantity">x 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action clearfix">
                                <span class="fleft top-checkout-price">$114.95</span>
                                <button class="button button-3d button-small nomargin fright">View Cart</button>
                            </div>
                            </div>
                    </div> --}}
                    <!-- #top-cart end -->

                    <!-- Top Search ============================================= -->
         {{--            <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="{!! url('en/search') !!}" method="get" role="search">>
                            <input type="text" name="q" class="form-control" value="{!! $q or null !!}" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div> --}}
                    <!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
{{-- @show --}}

@yield('submenu')
@yield('slider')
@yield('intro')
@yield('pagetitle')
@yield('sidebar')
@yield('content')
@include('live/layout/footer')
@yield('footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
@yield('footerscripts')



<script src="{!! asset('/live/js/jquery-match-height/jquery.matchHeight-min.js') !!}"></script>
<script src="{!! asset('/live/js/functions.js') !!}"></script>
@stack('scripts')


</body>
</html>