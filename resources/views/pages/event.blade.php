@extends('layouts.main')
@section('title', 'Events')

@section('main')
<div class="container">
  <div class="row event-container">
    <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
      <ul class="event-list">
        
        @foreach ($events as $key => $event)
        @php
            $event_date = strtotime($event->date)
        @endphp
        <li>
            <time title="{{$event->date}}">
                <span class="day">{{ date('d', $event_date) }}</span>
                <span class="month">{{date('M', $event_date)}}</span>
                <span class="year">{{date('Y', $event_date)}}</span>
                <span class="time">3:30 PM</span>
            </time>
            <div class="info">
                @foreach ($event->details as $key => $detail)
                    @if ($detail->lang === Config::get('app.locale'))
                        <h2 class="title">{{ $detail->title }}</h2>
                        <p class="desc">{{ $detail->body }}</p>
                        <p class="desc"><strong>@lang('global.event_location')</strong> {{ $detail->location }}</p>
                    @endif
                @endforeach
            </div>
            <div class="social">
                <ul>
                    <li class="facebook" style="width:33%;">
                        <a href="{{ $event->url_fb }}" target="_blank"><span class="fa fa-facebook"></span></a>
                    </li>
                    <li class="instagram" style="width:34%;">
                        <a href="{{ $event->url_instagram }}" target="_blank"><span class="fa fa-instagram"></span></a>
                    </li>
                    <li class="e-mail" style="width:33%;">
                        <a href="mailto:{{ $event->email }}"><span class="fa fa-envelope"></span></a>
                    </li>
                </ul>
            </div>
        </li>            
        @endforeach
      </ul>
    </div>
  </div>
</div>
@endsection
