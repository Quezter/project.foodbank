@extends('layouts.main')
@section('title', 'Events')

@section('main')
<div class="container">
  <div class="row event-container">
    <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
      <ul class="event-list">
        <li>
          <time>
            <span class="day">14</span>
            <span class="month">Feb</span>
            <span class="year">2018</span>
            <span class="time">3:30 PM</span>
          </time>
          <div class="info">
            <h2 class="title">New Vans</h2>
            <p class="desc">Amsterdam FoodBank brigade will use new vans, to collect fresh food from supermarkets across Amsterdam.</p>
            <p class="desc"><strong>@lang('global.event_location')</strong> Archangelkade 11, 1013 BE Amsterdam, Netherlands</p>
          </div>
          <div class="social">
            <ul>
              <li class="facebook" style="width:33%;">
                <a href="https://www.facebook.com/events/167324357326140/" target="_blank"><span class="fa fa-facebook"></span></a>
              </li>
              <li class="instagram" style="width:34%;">
                <a href="https://www.instagram.com/project__foodbank/" target="_blank"><span class="fa fa-instagram"></span></a>
              </li>
              <li class="e-mail" style="width:33%;">
                <a href="mailto:info@projectfoodbank.org"><span class="fa fa-envelope"></span></a>
              </li>
            </ul>
          </div>
        </li>
        
        <li>
          <time datetime="2014-07-20 2000">
            <span class="day">18</span>
            <span class="month">Jan</span>
            <span class="year">2018</span>
            <span class="time">5:00 PM</span>
          </time>
          <div class="info">
            <h2 class="title">@lang('global.event_one_title')</h2>
            <p class="desc">@lang('global.event_one_body')</p>
            <p class="desc"><strong>@lang('global.event_location')</strong> Vrije Universiteit Amsterdam, HG 5A36</p>
          </div>
          <div class="social">
            <ul>
              <li class="facebook" style="width:33%;">
                <a href="https://www.facebook.com/events/1078464082295787/" target="_blank"><span class="fa fa-facebook"></span></a>
              </li>
              <li class="instagram" style="width:34%;">
                <a href="https://www.instagram.com/project__foodbank/" target="_blank"><span class="fa fa-instagram"></span></a>
              </li>
              <li class="e-mail" style="width:33%;">
                <a href="mailto:info@projectfoodbank.org"><span class="fa fa-envelope"></span></a>
              </li>
            </ul>
          </div>
        </li>
        
        <!--
        <li>
          <time datetime="2014-07-20">
            <span class="day">4</span>
            <span class="month">Jul</span>
            <span class="year">2018</span>
            <span class="time">ALL DAY</span>
          </time>
          <div class="info">
            <h2 class="title">Independence Day</h2>
            <p class="desc">United States Holiday</p>
          </div>
          <div class="social">
            <ul>
              <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="instagram" style="width:34%;"><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
              <li class="e-mail" style="width:33%;"><a href="#mail"><span class="fa fa-envelope"></span></a></li>
            </ul>
          </div>
        </li>
        -->
      </ul>
    </div>
  </div>
</div>
@endsection
