<!DOCTYPE html>
<html dir="ltr" lang="en" @yield('schematag')>
<head>

@yield('seo')

@yield('jsonschema')

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <!-- Stylesheets ============================================= -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="{!! asset('/frontend/css/bootstrap.css') !!}" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{!! asset('/frontend/style.css') !!}" type="text/css" />

<link rel="stylesheet" href="{!! asset('/frontend/css/bootstrap.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/frontend/css/font-icons.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/frontend/css/animate.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/frontend/css/magnific-popup.css') !!}" type="text/css" />

<link rel="stylesheet" href="{!! asset('/frontend/custom-css/big-table.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/frontend/custom-css/header.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/frontend/custom-css/block.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/frontend/custom.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/frontend/custom-css/custom.css') !!}" type="text/css" />
<link rel="stylesheet" href="{!! asset('/frontend/css/responsive.css') !!}" type="text/css" />



    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- External JavaScripts
    ============================================= -->
<script type="text/javascript" src="{!! asset('/frontend/js/jquery.js') !!}"></script>
<script type="text/javascript" src="{!! asset('/frontend/js/plugins.js') !!}"></script>
    <!-- Document Title
    ============================================= -->
    <title>Hand Quilting</title>




@yield('styles')
@yield('scripts')
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
                    <a href="{!! url('/' . getLang()) !!}" class="standard-logo" data-dark-logo="{!! url('frontend/images/grace-logo-light.png') !!}"><img src="{!! url('frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                    <a href="{!! url('/' . getLang()) !!}" class="retina-logo" data-dark-logo="{!! url('frontend/images/grace-logo-light.png') !!}"><img src="{!! url('frontend/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                </div><!-- #logo end -->



                <!-- Primary Navigation ============================================= -->
                <nav id="primary-menu" role="navigation">
                                @include('frontend/layout/menu')

                    <!-- Top Cart ============================================= -->
                    <div id="top-cart">
                        <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#">
                                        {!! HTML::image('frontend/images/shop/small/1.jpg', 'ALT TEXT') !!}
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
                                       {!! HTML::image('frontend/images//shop/small/6.jpg', 'ALT TEXT') !!}
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
                    </div><!-- #top-cart end -->

                    <!-- Top Search ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="{!! url('en/search') !!}" method="get" role="search">>
                            <input type="text" name="q" class="form-control" value="{!! $q or null !!}" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
{{-- @show --}}

@yield('submenu')

@yield('slider')

@yield('intro')
@yield('pagetitle')


@section('sidebar')

<h2>The current UNIX timestamp is {{ time() }}.</h2>

<h3>{{ $name or 'Default' }}</h3>

<p>This is the master sidebar.</p>


@show

@datetime($var)

@yield('content')

@include('frontend/layout/footer')
@yield('footer')

    </div><!-- #wrapper end -->

    <!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
@yield('footerscripts')
    <!-- Footer Scripts ============================================= -->

{{-- <script src="//code.jquery.com/jquery.js"></script> --}}
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>

<script src="{!! asset('/jquery-match-height/jquery.matchHeight-min.js') !!}"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="{!! asset('/frontend/js/functions.min.js') !!}"></script>
<script src="{!! asset('/frontend/js/plugins.js') !!}"></script>


@stack('scripts')



</body>
</html>


<script src="//code.jquery.com/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/holder/2.8.2/holder.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
