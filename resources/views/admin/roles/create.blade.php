@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Role
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">


            {!! Form::open(['route' => 'admin.roles.store']) !!}

            <div class="panel panel-default">
                <div class="panel-heading">
                    @lang('global.app_create')
                </div>

                <div class="panel-body">

                    @include('admin.roles.create_fields')

                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection

