@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h3 class="page-title">@lang('global.users.title')</h3>
    </section>

    <div class="content">
        {!! Form::model($user, ['method' => 'PUT', 'route' => ['admin.users.update', $user->id]]) !!}

        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('global.app_edit')
            </div>

            <div class="panel-body">
                @include('admin.users.edit_fields')

            </div>
        </div>

        {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

@stop

