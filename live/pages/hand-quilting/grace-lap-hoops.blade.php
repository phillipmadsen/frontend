@extends('live/layouts/live')
@section('htmlschema')itemscope itemtype="http://schema.org/Article"@endsection
@section('bodyschema')@endsection
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
 @include('frontend.pages.hand-quilting.partials.submenu')
@endsection
@section('slider') @endsection
@section('pagetitle')
	@include('frontend/layout/temp-title')
@endsection
@section('content')

<!-- Content ============================================= -->
<section id="content">
<div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Row Toggler</h3>
            </header>
            <div class="panel-body">
              <table class="table toggle-circle tablet breakpoint no-paging footable-loaded footable" id="exampleRowToggler">
                <thead>
                  <tr>
                    <th class="footable-visible footable-first-column footable-sortable">First Name<span class="footable-sort-indicator"></span></th>
                    <th class="footable-visible footable-last-column footable-sortable">Last Name<span class="footable-sort-indicator"></span></th>
                    <th data-hide="all" class="footable-sortable" style="display: none;">Job Title<span class="footable-sort-indicator"></span></th>
                    <th data-hide="all" class="footable-sortable" style="display: none;">DOB<span class="footable-sort-indicator"></span></th>
                    <th data-hide="all" class="footable-sortable" style="display: none;">Status<span class="footable-sort-indicator"></span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="footable-even" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Isidra</td>
                    <td class="footable-visible footable-last-column">Boudreaux</td>
                    <td style="display: none;">Traffic Court Referee</td>
                    <td style="display: none;">22 Jun 2014</td>
                    <td style="display: none;">
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr class="footable-odd" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Shona</td>
                    <td class="footable-visible footable-last-column">Woldt</td>
                    <td style="display: none;">Airline Transport Pilot</td>
                    <td style="display: none;">3 Oct 2015</td>
                    <td style="display: none;">
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr class="footable-even" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Granville</td>
                    <td class="footable-visible footable-last-column">Leonardo</td>
                    <td style="display: none;">Business Services Sales Representative</td>
                    <td style="display: none;">19 Apr 2013</td>
                    <td style="display: none;">
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr class="footable-odd" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Easer</td>
                    <td class="footable-visible footable-last-column">Dragoo</td>
                    <td style="display: none;">Drywall Stripper</td>
                    <td style="display: none;">13 Dec 2014</td>
                    <td style="display: none;">
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr class="footable-even" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Maple</td>
                    <td class="footable-visible footable-last-column">Halladay</td>
                    <td style="display: none;">Aviation Tactical Readiness Officer</td>
                    <td style="display: none;">30 Dec 2015</td>
                    <td style="display: none;">
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr class="footable-odd" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Maxine</td>
                    <td class="footable-visible footable-last-column">Woldt</td>
                    <td style="display: none;">Business Services Sales Representative</td>
                    <td style="display: none;">17 Oct 2014</td>
                    <td style="display: none;">
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr class="footable-even" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Lorraine</td>
                    <td class="footable-visible footable-last-column">Mcgaughy</td>
                    <td style="display: none;">Hemodialysis Technician</td>
                    <td style="display: none;">11 Nov 2014</td>
                    <td style="display: none;">
                      <span class="label label-table label-dark">Active</span>
                    </td>
                  </tr>
                  <tr class="footable-odd footable-detail-show" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Lizzee</td>
                    <td class="footable-visible footable-last-column">Goodlow</td>
                    <td style="display: none;">Technical Services Librarian</td>
                    <td style="display: none;">1 Nov 2014</td>
                    <td style="display: none;">
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr><tr class="footable-row-detail"><td class="footable-row-detail-cell" colspan="2"><div class="footable-row-detail-inner"><div class="footable-row-detail-row"><div class="footable-row-detail-name">Job Title:</div><div class="footable-row-detail-value">Technical Services Librarian</div></div><div class="footable-row-detail-row"><div class="footable-row-detail-name">DOB:</div><div class="footable-row-detail-value">1 Nov 2014</div></div><div class="footable-row-detail-row"><div class="footable-row-detail-name">Status:</div><div class="footable-row-detail-value">
                      <span class="label label-table label-danger">Suspended</span>
                    </div></div></div></td></tr>
                  <tr class="footable-even" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Judi</td>
                    <td class="footable-visible footable-last-column">Badgett</td>
                    <td style="display: none;">Electrical Lineworker</td>
                    <td style="display: none;">23 Jun 2013</td>
                    <td style="display: none;">
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr class="footable-odd" style="display: table-row;">
                    <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Lauri</td>
                    <td class="footable-visible footable-last-column">Hyland</td>
                    <td style="display: none;">Blackjack Supervisor</td>
                    <td style="display: none;">15 Nov 2014</td>
                    <td style="display: none;">
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
</section><!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts')
  @include('frontend/pages/footscript')
@endsection
@stop
