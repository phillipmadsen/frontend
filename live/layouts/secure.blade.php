<!DOCTYPE html>
<html dir="ltr" lang="en-US" @yield('htmlschema')>
<head>
@yield('seo')
@yield('jsonschema')

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />
	<meta name="description" content="">
	<meta name="keywords" content="">

	<link rel="shortcut icon" href="{!! url('favicon.ico') !!}">

	{{--  Stylesheets
	============================================= --}}
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/bootstrap.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/style.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/dark.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/font-icons.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/animate.css') !!}" type="text/css" />
	<link rel="stylesheet" href="{!! asset('/live/css/magnific-popup.css') !!}" type="text/css" />

	<link rel="stylesheet" href="{!! asset('/live/assets/plugins/font-awesome/css/font-awesome.min.css') !!}">
	<link rel="stylesheet" href="{!! asset('/live/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') !!}">
	<link rel="stylesheet" href="{!! asset('/live/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') !!}">
	<link rel="stylesheet" href="{!! asset('/live/assets/plugins/iCheck/skins/all.css') !!}">

	<link rel="stylesheet" type="text/css" href="{{ asset('/live/custom-css/block.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/live/custom-css/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/live/custom-css/header.css') }}">

	@yield('header_styles')
	@yield('scripts')
	@yield('ppscripts')

	<link rel="stylesheet" href="{!! asset('/live/css/responsive.css') !!}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- [if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	{{--  External JavaScripts
	============================================= --}}
	<script type="text/javascript" src="{!! asset('/live/js/jquery.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('/live/js/plugins.js') !!}"></script>

	{{--  Document Title
	============================================= --}}
	<title>@yield('title', 'The Grace Company')</title>
     <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '{!! $settings['ga_code']  or 'UA-64291412-1' !!}', 'auto');
      ga('send', 'pageview');

    </script>
</head>



<body class="stretched" @yield('bodyschema')>

	{{--  Document Wrapper
	============================================= --}}
	<div id="wrapper" class="clearfix">
{{--  Top Bar ============================================= --}}
@include('live.layouts.partials.header.top-bar')
@yield('submenu')
{{--  Header ============================================= --}}
@include('live.layouts.partials.header.header')


@yield('submenu')
@yield('slider')
@yield('intro')
@yield('page-title')
@yield('sidebar')

		{{--  Content ============================================= --}}
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					@yield('content')
				</div>
			</div>
		</section>{{--  #content end --}}

		{{--  Footer ============================================= --}}
		<footer id="footer" class="dark">
			<div class="container">
		@include('live.layouts.partials.footer.footer-widgets')
			</div>
			{{--  Copyrights
			============================================= --}}
			<div id="copyrights">
		@include('live.layouts.partials.footer.copyr')
			</div>{{--  #copyrights end --}}
		</footer>{{--  #footer end --}}

	</div>{{--  #wrapper end --}}

	{{--  Go To Top
	============================================= --}}
	<div id="gotoTop" class="icon-angle-up"></div>

 {{--  Footer Scripts ============================================= --}}
   <script type="text/javascript">

                    jQuery(window).load(function(){


                        $('#page-menu a').click(function(){
                            $('#page-menu li').removeClass('current');
                            $(this).parent('li').addClass('current');
                            var selector = $(this).attr('data-filter');
                            $container.isotope({ filter: selector });
                            return false;
                        });

                        $(window).resize(function() {
                            $container.isotope('layout');
                        });

                    });

                </script>
                @yield('footer_scripts')
	<script src="{!! asset('/live/assets/plugins/autosize/jquery.autosize.min.js') !!}"></script>
	<script src="{!! asset('/live/assets/plugins/select2/select2.min.js') !!}"></script>
	<script src="{!! asset('/live/assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js') !!}"></script>
	<script src="{!! asset('/live/assets/plugins/jquery-maskmoney/jquery.maskMoney.js') !!}"></script>
	<script src="{!! asset('/live/assets/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js') !!}"></script>
	<script src="{!! asset('/live/assets/plugins/iCheck/jquery.icheck.min.js') !!}"></script>
	<script src="{!! asset('/live/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') !!}"></script>
	<script src="{!! asset('/live/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') !!}"></script>
	<script src="{!! asset('/live/assets/js/main.js') !!}"></script>
	<script src="{!! asset('/live/assets/js/form-elements.js') !!}"></script>

	@yield('pp_footer_scripts')
	<script type="text/javascript" src="{!! asset('/live/js/functions.js') !!}"></script>
	<script>
	jQuery(document).ready(function() {
		Main.init();
		FormElements.init();
	});
	</script>
	<script type="text/javascript" src="{!! asset('/live/js/functions.js') !!}"></script>

</body>
</html>