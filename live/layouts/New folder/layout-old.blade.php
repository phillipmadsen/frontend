<!DOCTYPE html>
<html lang="en" @yield('schematag')>
<head>
    <meta charset="utf-8">
    <title>{!! $settings['site_title'] or "Grace Multi Language Managment System" !!}</title>
    @yield('seo')

    <meta name="description" content="{!! isset($meta_description) ? $meta_description : ($settings['meta_description']) !!}">
    <meta name="keywords" content="{!! isset($meta_keywords) ? $meta_keywords : ($settings['meta_keywords']) !!}">
    <meta name="author"content="The Grace Company"/>
        <script>document.createElement("article");</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('jsonschema')

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/css/bootstrap.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/style.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/css/dark.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/css/font-icons.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/css/animate.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/css/magnific-popup.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/css/footable.bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/css/fonts.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/custom-css/big-table.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/custom-css/block.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/custom-css/header.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/custom-css/custom.css') !!}" rel="stylesheet" type="text/css" />
<link href="{!! asset('frontend/css/responsive.css') !!}" rel="stylesheet" type="text/css" />


<script src="//code.jquery.com/jquery.js"></script>

<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">


<!--[if lt IE 9]>
<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="shortcut icon" href="{!! url('favicon.ico') !!}">

 <script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', '{!! "UA-64291412-1" !!}', 'auto');
  ga('send', 'pageview');

  (function () {
    $(function () {
      $('.matchheight').matchHeight();
    });
  })();


    WebFontConfig = {
        google: {
            families: [
            'Source+Code+Pro:400,700:latin',
            'Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
            'Oswald:400,700',
            'Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic',
            'Roboto:400,300,500,700,400italic:latin',
            'Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic'
            ]
        }
    };
    (function() {
        var wf = document.createElement('script');
        wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
    })();
</script>
<style>#top-cart, #top-search {float: right!important; } #primary-menu ul {float: left!important; }  </style>

@yield('styles')
@yield('scripts')
</head><!--/head-->

<body class="@yield('bodytag') stretched">
<!-- Document Wrapper ============================================= -->
    <div id="wrapper" class="clearfix">
    @yield('top')

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

@yield('submenu')

@yield('slider')
@yield('intro')
@yield('pagetitle')
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
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{!! asset('/minified/json2.min.js') !!}"></script>
<script src="{!! asset('/minified/livicons-1.4.min.js') !!}"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
@stack('scripts')



</body>
</html>
