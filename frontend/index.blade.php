@extends('frontend/layout/layout')

@section('htmlschema')@endsection
@section('bodyschema')@endsection
@section('seo')@endsection
@section('jsonschema')@endsection
@section('schematag')@endsection

{{-- Page title --}}
@section('title')
Home | The Grace Company
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->

    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/live/') }}"> --}}

    <!--end of page level css-->
@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection



@section('submenu')@endsection
@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection
@section('sidebar')@endsection


@section('content')
<h1>this is index page content</h1>
@endsection

{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    {{-- <script type="text/javascript" src="{{ asset('live/') }}"></script> --}}

    <!--page level js ends-->
@endsection
@section('ppscripts')@endsection