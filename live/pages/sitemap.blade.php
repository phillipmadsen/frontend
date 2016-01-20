@extends('live/layouts/live')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

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
@section('scripts')

@endsection
@section('top')
    @include('frontend/top-default')
@endsection
@section('submenu')
 @include('frontend.pages.general-submenu')
@endsection
@section('slider') @endsection
@section('pagetitle')
	<!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-dark">

            <div class="container clearfix">
                <h1>SITEMAP</h1>
                <span>List of Our Site Pages</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                 {{--    <li><a href="#">Shortcodes</a></li> --}}
                    <li class="active">Sitemap</li>
                </ol>
            </div>

        </section><!-- #page-title end -->
@endsection
@section('content')

        <!-- Page Title ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Left Sidebar</h1>
                <span>Page Content on the Right &amp; Sidebar on the Left</span>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Left Sidebar</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content ============================================= -->
                    <div class="postcontent nobottommargin col_last clearfix">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, eos quibusdam accusamus. Maiores, distinctio similique at fugiat reiciendis corporis pariatur. Iusto, molestiae odio ullam quas ratione! Explicabo, sunt, totam mollitia eveniet quasi commodi maxime impedit quos magni deleniti? Laborum, ad, necessitatibus minima officiis mollitia commodi quia dolore enim animi doloribus.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, tempora, ullam tempore dicta consectetur qui enim earum odio nobis cum perspiciatis possimus expedita quae suscipit quibusdam ipsam aperiam atque dignissimos illo commodi quaerat temporibus consequuntur nemo fuga neque minus iusto natus vero dolor id cupiditate placeat esse ratione recusandae dolorem aliquam eius facilis repellat architecto reprehenderit odit rerum totam modi corporis pariatur doloribus magni error porro harum sint! Libero, consequatur, tempore minima tenetur quo vel modi incidunt officiis doloribus enim facere atque iusto cupiditate sint illum cumque iste reprehenderit nihil dolores saepe repellendus rerum dolore minus fugiat harum fugit dicta.</p>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
          {{--           <div class="sidebar nobottommargin clearfix">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget subscribe-widget clearfix">
                                <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
                                    <div class="fancy-title title-border">
                                        <h4>Subscribe</h4>
                                    </div>

                                    <p style="font-size: 15px; line-height: 1.5; color: #999;">Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
                                    <div id="widget-subscribe-form-result2" data-notify-type="success" data-notify-msg=""></div>
                                    <form id="widget-subscribe-form2" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                                        <div class="input-group divcenter">
                                            <span class="input-group-addon"><i class="icon-email2"></i></span>
                                            <input type="email" id="widget-subscribe-form-email2" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                        </div>
                                        <button class="button button-3d btn-block button-small nomargin" style="margin-top: 15px !important;" type="submit">Subscribe</button>
                                    </form>
                                    <script type="text/javascript">
                                        $("#widget-subscribe-form2").validate({
                                            submitHandler: function(form) {
                                                $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                                $(form).ajaxSubmit({
                                                    target: '#widget-subscribe-form-result2',
                                                    success: function() {
                                                        $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                                        $('#widget-subscribe-form2').find('.form-control').val('');
                                                        $('#widget-subscribe-form-result2').attr('data-notify-msg', $('#widget-subscribe-form-result2').html()).html('');
                                                        SEMICOLON.widget.notifications($('#widget-subscribe-form-result2'));
                                                    }
                                                });
                                            }
                                        });
                                    </script>
                                </div>
                            </div>

                            <div class="widget widget_links clearfix">

                                <h4>Pages</h4>
                                <ul>
                                    <li><a href="#"><div>About Us</div></a></li>
                                    <li><a href="#"><div>About Us - Layout 2</div></a></li>
                                    <li><a href="#"><div>About Me</div></a></li>
                                    <li><a href="#"><div>Team Members</div></a></li>
                                    <li><a href="#"><div>Careers</div></a></li>
                                    <li><a href="#"><div>Side Navigation</div></a></li>
                                    <li><a href="#"><div>Page Submenu</div></a></li>
                                    <li><a href="#"><div>Services - Layout 1</div></a></li>
                                    <li><a href="#"><div>Services - Layout 2</div></a></li>
                                    <li><a href="#"><div>Services - Layout 3</div></a></li>
                                    <li><a href="#"><div>FAQs - Layout 1</div></a></li>
                                    <li><a href="#"><div>FAQs - Layout 2</div></a></li>
                                    <li><a href="#"><div>FAQs - Layout 3</div></a></li>
                                    <li><a href="#"><div>FAQs - Layout 4</div></a></li>
                                    <li><a href="#"><div>Full Width Page</div></a></li>
                                    <li><a href="#"><div>Full Width - Wide Page</div></a></li>
                                    <li><a href="#"><div>Right Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Left Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Both Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Both Right Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Both Left Sidebar Page</div></a></li>
                                    <li><a href="#"><div>Maintenance Page</div></a></li>
                                    <li><a href="#"><div>Blank Page</div></a></li>
                                    <li><a href="#"><div>Sitemap</div></a></li>
                                    <li><a href="#"><div>Login/Register</div></a></li>
                                    <li><a href="#"><div>404 - Simple Layout</div></a></li>
                                    <li><a href="#"><div>404 - Parallax Image</div></a></li>
                                    <li><a href="#"><div>404 - HTML5 Video</div></a></li>
                                </ul>

                            </div>

                            <div class="widget clearfix">

                                <h4>Recent Posts</h4>
                                <div id="post-list-footer">

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/magazine/small/1.jpg" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/magazine/small/2.jpg" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/magazine/small/3.jpg" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Connect with Us</h4>
                                <a href="#" class="social-icon si-colored si-small si-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-delicious" data-toggle="tooltip" data-placement="top" title="Delicious">
                                    <i class="icon-delicious"></i>
                                    <i class="icon-delicious"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-android" data-toggle="tooltip" data-placement="top" title="Android">
                                    <i class="icon-android"></i>
                                    <i class="icon-android"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-gplus" data-toggle="tooltip" data-placement="top" title="Google Plus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-stumbleupon" data-toggle="tooltip" data-placement="top" title="Stumbleupon">
                                    <i class="icon-stumbleupon"></i>
                                    <i class="icon-stumbleupon"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-foursquare" data-toggle="tooltip" data-placement="top" title="Foursquare">
                                    <i class="icon-foursquare"></i>
                                    <i class="icon-foursquare"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-forrst" data-toggle="tooltip" data-placement="top" title="Forrst">
                                    <i class="icon-forrst"></i>
                                    <i class="icon-forrst"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-digg" data-toggle="tooltip" data-placement="top" title="Digg">
                                    <i class="icon-digg"></i>
                                    <i class="icon-digg"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-spotify" data-toggle="tooltip" data-placement="top" title="Spotify">
                                    <i class="icon-spotify"></i>
                                    <i class="icon-spotify"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-reddit" data-toggle="tooltip" data-placement="top" title="Reddit">
                                    <i class="icon-reddit"></i>
                                    <i class="icon-reddit"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-blogger" data-toggle="tooltip" data-placement="top" title="Blogger">
                                    <i class="icon-blogger"></i>
                                    <i class="icon-blogger"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble">
                                    <i class="icon-dribbble"></i>
                                    <i class="icon-dribbble"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-flickr" data-toggle="tooltip" data-placement="top" title="Flickr">
                                    <i class="icon-flickr"></i>
                                    <i class="icon-flickr"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-linkedin" data-toggle="tooltip" data-placement="top" title="Linked In">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-rss" data-toggle="tooltip" data-placement="top" title="RSS">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-skype" data-toggle="tooltip" data-placement="top" title="Skype">
                                    <i class="icon-skype"></i>
                                    <i class="icon-skype"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-youtube" data-toggle="tooltip" data-placement="top" title="Youtube">
                                    <i class="icon-youtube"></i>
                                    <i class="icon-youtube"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-vimeo" data-toggle="tooltip" data-placement="top" title="Vimeo">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-yahoo" data-toggle="tooltip" data-placement="top" title="Yahoo">
                                    <i class="icon-yahoo"></i>
                                    <i class="icon-yahoo"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-github" data-toggle="tooltip" data-placement="top" title="Github">
                                    <i class="icon-github-circled"></i>
                                    <i class="icon-github-circled"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-tumblr" data-toggle="tooltip" data-placement="top" title="Trumblr">
                                    <i class="icon-tumblr"></i>
                                    <i class="icon-tumblr"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-instagram" data-toggle="tooltip" data-placement="top" title="Instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>

                                <a href="#" class="social-icon si-colored si-small si-pinterest" data-toggle="tooltip" data-placement="top" title="Pinterst">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>

                            </div>

                            <div class="widget clearfix">

                                <h4>Embed Videos</h4>
                                <iframe src="//player.vimeo.com/video/103927232" width="500" height="250" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                            </div>

                        </div>
                    </div>  --}}

                </div>

            </div>

















 <div class="page-content container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <!-- Panel Row Toggler -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Row Toggler</h3>
            </header>
            <div class="panel-body">
              <table class="table toggle-circle" id="exampleRowToggler">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th data-hide="all">Job Title</th>
                    <th data-hide="all">DOB</th>
                    <th data-hide="all">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Isidra</td>
                    <td>Boudreaux</td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Shona</td>
                    <td>Woldt</td>
                    <td>Airline Transport Pilot</td>
                    <td>3 Oct 2015</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lorraine</td>
                    <td>Mcgaughy</td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 2014</td>
                    <td>
                      <span class="label label-table label-dark">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lizzee</td>
                    <td>Goodlow</td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Judi</td>
                    <td>Badgett</td>
                    <td>Electrical Lineworker</td>
                    <td>23 Jun 2013</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Panel Row Toggler -->
        </div>

        <div class="col-lg-6">
          <!-- Panel Accordion -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Accordion</h3>
            </header>
            <div class="panel-body">
              <table class="table toggle-arrow-tiny" id="exampleFooAccordion">
                <thead>
                  <tr>
                    <th data-toggle="true">First Name</th>
                    <th>Last Name</th>
                    <th data-hide="all">Job Title</th>
                    <th data-hide="all">DOB</th>
                    <th data-hide="all">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Shona</td>
                    <td>Woldt</td>
                    <td>Airline Transport Pilot</td>
                    <td>3 Oct 2015</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lizzee</td>
                    <td>Goodlow</td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Isidra</td>
                    <td>Boudreaux</td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lorraine</td>
                    <td>Mcgaughy</td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 2014</td>
                    <td>
                      <span class="label label-table label-dark">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Judi</td>
                    <td>Badgett</td>
                    <td>Electrical Lineworker</td>
                    <td>23 Jun 2013</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- End Panel Accordion -->
        </div>

      </div>




      <div class="row">
        <div class="col-lg-12">
          <!-- Panel Filtering -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Filtering</h3>
            </header>
            <div class="panel-body">
              <table class="table table-bordered table-hover toggle-circle" id="exampleFootableFiltering">
                <thead>
                  <tr>
                    <th data-toggle="true">First Name</th>
                    <th>Last Name</th>
                    <th data-hide="phone, tablet">Job Title</th>
                    <th data-hide="phone, tablet">DOB</th>
                    <th data-hide="phone, tablet">Status</th>
                  </tr>
                </thead>
                <div class="form-inline padding-bottom-15">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label class="control-label">Status</label>
                        <select id="filteringStatus" class="form-control">
                          <option value="">Show all</option>
                          <option value="active">Active</option>
                          <option value="disabled">Disabled</option>
                          <option value="suspended">Suspended</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6 text-right">
                      <div class="form-group">
                        <input id="filteringSearch" type="text" placeholder="Search" class="form-control"
                        autocomplete="off">
                      </div>
                    </div>
                  </div>
                </div>
                <tbody>
                  <tr>
                    <td>Shona</td>
                    <td>Woldt</td>
                    <td>Airline Transport Pilot</td>
                    <td>3 Oct 2015</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lizzee</td>
                    <td>Goodlow</td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Isidra</td>
                    <td>Boudreaux</td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lorraine</td>
                    <td>Mcgaughy</td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Judi</td>
                    <td>Badgett</td>
                    <td>Electrical Lineworker</td>
                    <td>23 Jun 2013</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lorraine</td>
                    <td>Mcgaughy</td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Judi</td>
                    <td>Badgett</td>
                    <td>Electrical Lineworker</td>
                    <td>23 Jun 2013</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="5">
                      <div class="text-right">
                        <ul class="pagination"></ul>
                      </div>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <!-- End Panel Filtering -->
        </div>

        <div class="col-lg-12">
          <!-- Panel Add &amp; Remove Rows -->
          <div class="panel">
            <header class="panel-heading">
              <h3 class="panel-title">Add &amp; Remove Rows</h3>
            </header>
            <div class="panel-body">
              <table id="exampleFooAddRemove" class="table table-bordered table-hover toggle-circle"
              data-page-size="7">
                <thead>
                  <tr>
                    <th data-sort-ignore="true" class="min-width"></th>
                    <th data-sort-initial="true" data-toggle="true">First Name</th>
                    <th>Last Name</th>
                    <th data-hide="phone, tablet">Job Title</th>
                    <th data-hide="phone, tablet">DOB</th>
                    <th data-hide="phone, tablet">Status</th>
                  </tr>
                </thead>
                <div class="form-inline padding-bottom-15">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <button id="addRowBtn" class="btn btn-outline btn-primary btn-sm"><i class="icon wb-plus" aria-hidden="true"></i>Add New
                          Row</button>
                      </div>
                    </div>
                    <div class="col-sm-6 text-right">
                      <div class="form-group">
                        <input id="addRemoveSearch" type="text" placeholder="Search" class="form-control"
                        autocomplete="off">
                      </div>
                    </div>
                  </div>
                </div>
                <tbody>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Shona</td>
                    <td>Woldt</td>
                    <td>Airline Transport Pilot</td>
                    <td>3 Oct 2015</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Lizzee</td>
                    <td>Goodlow</td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Isidra</td>
                    <td>Boudreaux</td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Doris</td>
                    <td>Michael</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Jason</td>
                    <td>Statham</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Lorraine</td>
                    <td>Mcgaughy</td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Judi</td>
                    <td>Badgett</td>
                    <td>Electrical Lineworker</td>
                    <td>23 Jun 2013</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Archer</td>
                    <td>Lily</td>
                    <td>Drywall Stripper</td>
                    <td>13 Jun 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Lorraine</td>
                    <td>Mcgaughy</td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Judi</td>
                    <td>Badgett</td>
                    <td>Electrical Lineworker</td>
                    <td>23 Jun 2013</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maria</td>
                    <td>Tangeli</td>
                    <td>Drywall Stripper</td>
                    <td>21 May 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Easer</td>
                    <td>Dragoo</td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 2014</td>
                    <td>
                      <span class="label label-table label-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2015</td>
                    <td>
                      <span class="label label-table label-danger">Suspended</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <button class="btn btn-icon btn-danger btn-outline btn-round btn-xs delete-row-btn"><i class="icon wb-close-mini" aria-hidden="true"></i></button>
                    </td>
                    <td>Maxine</td>
                    <td>Woldt</td>
                    <td>Business Services Sales Representative</td>
                    <td>17 Oct 2014</td>
                    <td>
                      <span class="label label-table label-dark">Disabled</span>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6">
                      <div class="text-right">
                        <ul class="pagination"></ul>
                      </div>
                    </td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
          <!-- End Panel Add &amp; Remove Rows -->
        </div>

      </div>
    </div>









<script>


</script>

        </section><!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts')
  @include('frontend/pages/footscript')
@endsection
@stop
