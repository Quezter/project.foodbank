@extends('layouts.main')
@section('title', 'About Us')

@section('main')
  <div class="container">
    <div class="row about-us-wrapper">
      <div class="col-md-6 au-column">
        <h3>@lang('global.about_title_one')</h3>
        <p>@lang('global.about_body_one_one')</p>
        <p>@lang('global.about_body_one_two')</p>
        
        <h3>@lang('global.about_title_two')</h3>
        <h1><em>@lang('global.about_body_two_highlight')</em></h1>
        <p>@lang('global.about_body_two_one')</p>
        <p>@lang('global.about_body_two_two')</p>        
      </div>
      <div class="col-md-6 au-column">
          <img src="images/about-us-page.jpg" height="800px" alt="Our Team">
      </div>
    </div>
  </div>
@endsection
