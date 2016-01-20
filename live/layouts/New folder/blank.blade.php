@extends('frontend.layout.layout')
@section('schemahtml')itemscope itemtype="http://schema.org/Article"@endsection
@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection
@section('jsonschema')
  {{-- @include('frontend/pages/qct/partials/microjson') --}}
@endsection
@section('bodytag')rows @endsection
@section('styles') @endsection
@section('scripts') @endsection
@section('top')
    @include('frontend/top-default')
@endsection
@section('submenu')
 {{-- @include('frontend.pages.hand-quilting.partials.submenu') --}}
@endsection
@section('slider') @endsection
@section('pagetitle')
	@include('frontend/layout/temp-title')
@endsection
@section('content')

<!-- Content ============================================= -->
<section id="content">

</section><!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts')
  @include('frontend/pages/footscript')
@endsection
@stop
