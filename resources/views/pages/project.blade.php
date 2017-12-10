@extends('layouts.main')
@section('title', 'Initiatives')

@section('main')
  <div class="container">
    <div>
      <div class="jumbotron project-jumbotron ffb" style="margin-top: 20px;">
        <h1 class="display-3">@lang('global.initiative_one_title')</h1>
        <p class="lead">@lang('global.initiative_one_body')</p>
      </div>
      
      <hr />
      <div class="project-end"></div>      
    </div>
    
    <div>
      <div class="jumbotron project-jumbotron icb" style="margin-top: 20px;">
        <h1 class="display-3">@lang('global.initiative_two_title')</h1>
        <p class="lead">@lang('global.initiative_two_body')</p>
      </div>

      <hr />
      <div class="project-end"></div>      
    </div>
  </div>
@endsection
