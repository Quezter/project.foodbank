@extends('layouts.main')
@section('title', 'Projects')

@section('main')
  <div class="container">
    
    <div class="init-cover">
      <img src="images/at-warehouse.jpg" alt="">
    </div>
    <div>
      <h1 class="display-3 init-title">@lang('global.initiative_one_title')</h1>
      <p class="lead">@lang('global.initiative_one_body')</p>
      <hr />
      <div class="project-end"></div>      
      
      <h1 class="display-3 init-title">@lang('global.initiative_two_title')</h1>
      <p class="lead">@lang('global.initiative_two_body')</p>
      <hr />
      <div class="project-end"></div>      
    </div>
  </div>
@endsection
