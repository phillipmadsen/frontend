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
   <!-- Header ============================================= -->
    <header id="header" class="transparent-header semi-transparent dark full-header">
        <div id="header-wrap">
            <div class="container clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                <!-- Logo ============================================= -->
                <div id="logo">
                    <a href="{!! url('/') !!}" class="standard-logo" data-dark-logo="{!! asset('/live/images/grace-logo-light.png') !!}">
                    <img src="{!! asset('/live/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                    <a href="{!! url('/') !!}" class="retina-logo" data-dark-logo="{!! asset('/live/images/grace-logo-light.png') !!}">
                    <img src="{!! asset('/live/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
                </div><!-- #logo end -->
                <!-- Primary Navigation ============================================= -->
                <nav id="primary-menu" role="navigation">
                                {{-- @include('live/layout/menu') --}}
                </nav><!-- #primary-menu end -->
            </div>
        </div>
    </header><!-- #header end -->
@yield('submenu')
@yield('slider')
@yield('intro')
@yield('pagetitle')
@yield('sidebar')
@yield('content')
@include('/live/layout/footer')
@yield('footer')
    </div><!-- #wrapper end -->
    <!-- Go To Top ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>
@yield('footerscripts')
<script src="{!! asset('/live/js/jquery-match-height/jquery.matchHeight-min.js') !!}"></script>
<script src="{!! asset('/live/js/functions.js') !!}"></script>
{{-- @stack('scripts') --}}
@yield('ppscripts')
</body>
</html>