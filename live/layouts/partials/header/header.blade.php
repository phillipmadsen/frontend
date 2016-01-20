<!-- Header ============================================= -->
<header id="header" class="transparent-header semi-transparent dark full-header">
	<div id="header-wrap">
		<div class="container clearfix">
			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
			<!-- Logo
			============================================= -->
			<div id="logo">
				<a href="{{ url('/') }}" class="standard-logo" data-dark-logo="{!! asset('/live/images/grace-logo-light.png') !!}"><img src="{!! asset('/live/images/grace-logo-light.png') !!}" alt="Grace Logo"></a>
				<a href="{{ url('/') }}" class="retina-logo" data-dark-logo="{!! asset('/live/images/grace-logo-light.png') !!}"><img src="{!! asset('/live/images/grace-logo-light.png') !!}" alt="GraceLogo"></a>
			</div><!-- #logo end -->
			<!-- Primary Navigation ============================================= -->
			<nav id="primary-menu">
				<ul class="sf-js-enabled" style="touch-action: pan-y;">

					{{-- @include('live.layouts.partials.menu.items', ['items'=> $menu_livePrimary->roots()]) --}}
				</ul>
			</nav><!-- #primary-menu end -->
		</div>
	</div>
</header><!-- #header end -->