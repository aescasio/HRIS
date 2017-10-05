@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h3 class="page-title">@lang('global.users.title')</h3>
    </section>

    <div class="content">

        {!! Form::open(['method' => 'POST', 'route' => ['admin.users.store']]) !!}

        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('global.app_create')
            </div>

            <div class="panel-body">
                @include('admin.users.create_fields')

            </div>
        </div>

        {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop

