@extends('layouts.main')
@section('title', 'Initiatives')

@section('main')
    <div class="container">
    @foreach ($initiatives as $initiative)
        @foreach ($initiative->details as $key => $detail)
            @if ($detail->lang === Config::get('app.locale'))
            <div>
              <div class="jumbotron project-jumbotron" 
                    style="margin-top: 20px; background-image: url({{$initiative->pic_url}})">
                <h1 class="display-3">{{ $detail->title }}</h1>
                <p class="lead">{{ $detail->body }}</p>
              </div>
              
              <hr />
              <div class="project-end"></div>      
            </div>
            @endif
        @endforeach
    @endforeach
    </div>
@endsection
