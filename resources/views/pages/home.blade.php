@extends('layouts.main')
@section('title', 'Food Bank')
@section('hero')
<!-- Hero -->
<section class="hero">
  <div class="pull-right" style="z-index: 1; position: absolute; top: 20; right: 20;">
    <img style="height: 50px;" src="images/logo-vu.png" alt="Vrije Universiteit" />
    <img style="height: 50px;" src="images/logo-voedselbank.png" alt="VOEDSELBANK" />
  </div>
  <div style="z-index: 1; color: #5d5d5d; position: absolute; top: 20; left: 20; font-family: 'Raleway', Helvetica, Arial, sans-serif; font-weight: 900">
    <h3>@lang('global.project_name')</strong></h3>
    <h4><em>@lang('global.project_description')</em></h4>
  </div>
  @if(Auth::guest())

  @else
    <div class="pull-right" style="z-index: 1; position: absolute; top: 20; right: 20;">
      <form>
        <input type="text" placeholder="[devinfo-Logged]" />
        <input type="text" placeholder="Wallet" />
        <input type="button" value="Buy" />
      </form>
    </div>
  @endif
</section>
<!-- /Hero -->
@endsection

@section('main')
  <!-- Portfolio -->
  <!-- @TODO: Use portfolio for coin brief info -->
  <section id="portfolio" class="portfolio">
    <div class="container text-center">
      <h2>
        @lang('global.mission_label')
      </h2>

      <p>
        @lang('global.mission')
      </p>
    </div>

    <div class="portfolio-grid">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="card card-block">
            <a href="/project"><img alt="" src="images/projects.jpeg">
            <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    @lang('global.title_xtra_info_projects')
                  </h3>

                  <p class="card-text">
                    @lang('global.body_xtra_info_projects')
                  </p>

                  <p class="card-text card-text-left">
                      @lang('global.read_more')
                      <span class="fa fa-arrow-right"></span>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="card card-block">
            <a href="/event"><img alt="" src="images/events.jpeg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    @lang('global.title_xtra_info_events')
                  </h3>

                  <p class="card-text">
                    @lang('global.body_xtra_info_events')
                  </p>

                  <p class="card-text card-text-left">
                      @lang('global.read_more')
                      <span class="fa fa-arrow-right"></span>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="card card-block">
            <a href="/about-us"><img alt="" src="images/about-us.jpg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    @lang('global.title_xtra_info_about')
                  </h3>

                  <p class="card-text">
                    @lang('global.body_xtra_info_about')
                  </p>

                  <p class="card-text card-text-left">
                      @lang('global.read_more')
                      <span class="fa fa-arrow-right"></span>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="card card-block">
            <a href="https://www.cognitoforms.com/TheFoodBankProject/ApplicationToJoinTheFoodBankProject" target="_blank">
              <img alt="" src="images/join-us.jpeg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    @lang('global.title_xtra_info_contacts')
                  </h3>

                  <p class="card-text">
                    @lang('global.body_xtra_info_contacts')
                  </p>

                  <p class="card-text card-text-left">
                      @lang('global.read_more')
                      <span class="fa fa-arrow-right"></span>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- /Portfolio -->

  <!-- Parallax
  <div class="block bg-primary block-pd-lg block-bg-overlay text-center"
      data-bg-img="images/parallax-bg.jpg"
      data-settings='{"stellar-background-ratio": 0.6}'
      data-toggle="parallax-bg">

    <h2>
      Welcome to a perfect theme
    </h2>

    <p>
      This is the most powerful theme with thousands of options that you have never seen before.
    </p>
    <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="images/gadgets.png">
  </div>
   /Parallax -->

  <!-- Features -->
  <!-- @TODO: Use features to share pros of he platform -->
  <section class="features" id="features">
    <div class="container">
      <h2 class="text-center">
        @lang('global.goals')
      </h2>

      <div class="row">
        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-cutlery"></span>
              </div>
            </div>
            <div>
              <h3>
                @lang('global.goal_title_first')
              </h3>

              <p>
                @lang('global.goal_body_first')
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-bus"></span>
              </div>
            </div>

            <div>
              <h3>
                @lang('global.goal_title_second')
              </h3>

              <p>
                @lang('global.goal_body_second')
              </p>
            </div>
          </div>
        </div>

        <div class="feature-col col-lg-4 col-xs-12">
          <div class="card card-block text-center">
            <div>
              <div class="feature-icon">
                <span class="fa fa-cube"></span>
              </div>
            </div>

            <div>
              <h3>
                @lang('global.goal_title_third')
              </h3>

              <p>
                @lang('global.goal_body_third')
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Features -->

  <!-- /Call to Action -->
@endsection
