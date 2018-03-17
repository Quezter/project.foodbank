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
                    <div>
                        {{ trans('backpack::base.logged_in') }}
                    </div>
                    
                    <div>
                        <p>
                            Build sections:
                        </p>
                        <ul>
                            <li>Events - Creating and editing events.</li>
                            <li>Events Details - Creating and editing events details in different languages.</li>
                        </ul>
                        <p>
                            Future sections:
                        </p>
                        <ul>
                            <li>Initiatives</li>
                            <li>Initiatives Details</li>
                            <li>Site Configurations - Maintaining site related matters (Can be form url, cover photo, color theme)</li>
                        </ul>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
