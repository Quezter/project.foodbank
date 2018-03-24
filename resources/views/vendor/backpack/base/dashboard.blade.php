@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ backpack_url() }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">
                    <h1>
                        {{ trans('backpack::base.logged_in') }}
                    </h1>
                    
                    <div>
                        <h3>
                            Built sections:
                        </h3>
                        <ul>
                            <li>Events - Creating and editing events.</li>
                            <li>Event Details - Creating and editing events details in different languages.</li>
                            <li>Initiatives</li>
                            <li>Initiative Details</li>
                            <li>Site Configuration - "Join us" form url</li>
                        </ul>
                        <h3>
                            Future sections:
                        </h3>
                        <ul>
                            <li>Publications</li>
                            <li>Publication Details</li>
                            <li>Site Configurations - Maintaining site related matters (Can be about information, cover photo(s), color theme)</li>
                        </ul>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
