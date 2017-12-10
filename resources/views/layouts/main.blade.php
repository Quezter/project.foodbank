<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ URL::asset('styles/styles.css') }}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Bell
      Theme URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
    <script src="{{ URL::asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/superfish/hoverIntent.js') }}"></script>
    <script src="{{ URL::asset('vendors/superfish/superfish.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/tether/js/tether.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/stellar/stellar.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/counterup/counterup.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/easing/easing.js') }}"></script>
    <script src="{{ URL::asset('vendors/stickyjs/sticky.js') }}"></script>
    <script src="{{ URL::asset('vendors/parallax/parallax.js') }}"></script>
    <script src="{{ URL::asset('vendors/lockfixed/lockfixed.min.js') }}"></script>
    <!-- Page Content
    ================================================== -->
    @yield('hero')

    <!-- Header -->
    <header id="header">
      <div class="container">

        <a href="{{ url('/') }}">
          <div id="logo" class="pull-left">
            {{-- <img src="{{ URL::asset('images/logo-nav.png') }}" alt="" title="" /></img> --}}
            <!-- Uncomment below if you prefer to use a text image -->
            <h1 style="color: white;">PFB</h1>
          </div>
        </a>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="/project">@lang('global.initiatives')</a></li>
            <li><a href="/event">@lang('global.events')</a></li>
            <li><a href="/about-us">@lang('global.about_us')</a></li>
            <li><a href="http://www.amsterdam.voedselbank.org/doneerknop/" target="_blank">@lang('global.donate')</a></li>
            <!--
            <li class="menu-has-children"><a href="">Drop Down</a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="menu-has-children"><a href="#">Drop Down 2</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
                <li><a href="#">Drop Down 5</a></li>
              </ul>
            </li>

            <li><a href="{{ URL::asset('/#contacts') }}">Contact Us</a></li>
            -->
          </ul>
        </nav>
        <!-- #nav-menu-container -->

        <nav class="nav social-nav pull-right hidden-sm-down">
          <a id="change-lang">
            @if(App::getLocale() === 'en') 
              <i style="text-transform: uppercase;">NL</i>
            @else
              <i style="text-transform: uppercase;">EN</i>
            @endif
          </a>
          <a href="https://www.facebook.com/ProjectFoodBank/" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/project__foodbank/" target="_blank">
            <i class="fa fa-instagram"></i>
          </a>
          <a href="mailto:info@projectfoodbank.org">
            <i class="fa fa-envelope"></i>
          </a>
        </nav>
      </div>
    </header>
    <!-- /header -->

    @yield('main')


    <!-- Call to Action -->
    <section class="cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-sm-12 text-lg-left">
            <h2>
              @lang('global.motivation_quote')
            </h2>

            <p>
              @lang('global.motivation_author')
            </p>
          </div>

          <div id="btn-apply-now" class="col-lg-3 col-sm-12 text-lg-right text-center">
            <a class="btn-bell btn-ghost" href="https://docs.google.com/forms/d/1Tv7wzKeA3AQSJHzN7LGTTmEJLckNC67OrTNGd_agUPk/viewform?ts=5a2a607d&edit_requested=true" target="_blank">
              @lang('global.join_us')
            </a>
          </div>
        </div>
      </div>
    </section>
    
    <!-- #component: footer -->
    <footer class="site-footer">
      <div class="bottom">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-xs-12 text-lg-left">
              <p class="copyright-text">
                © BELL Theme
              </p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bell
                -->
                <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by BootstrapMade
              </div>
            </div>
            
            <div class="col-lg-3">
                <p class="copyright-text credits">
                  Email: <a style="font-weight: 600;" href="mailto:info@projectfoodbank.org">info@projectfoodbank.org</a>
                </p>
            </div>

            <div class="col-lg-6 col-xs-12 text-lg-right text-center">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="/">@lang('global.home')</a>
                </li>

                <li class="list-inline-item">
                  <a href="/project">@lang('global.initiatives')</a>
                </li>

                <li class="list-inline-item">
                  <a href="/event">@lang('global.events')</a>
                </li>

                <li class="list-inline-item">
                  <a href="/about-us">@lang('global.about_us')</a>
                </li>

                <li class="list-inline-item">
                  <a href="http://www.amsterdam.voedselbank.org/doneerknop/" target="_blank">@lang('global.donate')</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

    <!-- JavaScript -->
    <!-- Required JavaScript Libraries -->
    {{-- PROBLEM WITH LARAVEL AUTOLOADING IF SCRIPTS ARE HERE --}}

    <!-- Template Specisifc Custom Javascript File -->
    <script src="{{ URL::asset('scripts/custom.js') }}"></script>
  </body>
</html>
