@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.roles.title')</h3>

    {!! Form::model($role, ['method' => 'PUT', 'route' => ['admin.roles.update', $role->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            @include('admin.roles.edit_fields')

        </div>
    </div>


    {!! Form::close() !!}
@endsection