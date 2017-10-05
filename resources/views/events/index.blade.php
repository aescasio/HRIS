@extends('layouts.app')

@section('content')

    <section class="content-header">
        <h1>Events <small>Calendar</small></h1>
        {{--<h1 class="pull-right">--}}
        {{--<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('events.create') !!}">Add New</a>--}}
        {{--</h1>--}}
    </section>

    <section class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title">Create Event <small>here</small></h4>
                    </div>
                    <div class="box-body">
                    {!! Form::open(['route' => 'events.store']) !!}
                    <!-- Title Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('title', 'Title:') !!}
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Description Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('description', 'Description:') !!}
                            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                        </div>

                        <!-- Start Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('start', 'Start:') !!}

                            <div class="input-group date" id="start">
                                {!! Form::date('start', null, ['class' => 'form-control','data-inputmask'=>'"alias": "mm/dd/yyyy hh:mm xm"']) !!}
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <!-- End Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::label('end', 'End:') !!}
                            <div class="input-group date" id="end">
                            {!! Form::date('end', null, ['class' => 'form-control', 'data-inputmask'=>'"alias": "mm/dd/yyyy hh:mm xm"']) !!}
                            <span class="input-group-addon" id="test">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <!-- Background Color Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('backgroundColor', 'Background:') !!}
                            {!! Form::text('backgroundColor', null, ['class' => 'form-control', 'id'=>'backgroundColor']) !!}
                        </div>

                        <!-- Border Color Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('borderColor', 'Border Color:') !!}
                            {!! Form::text('borderColor', null, ['class' => 'form-control', 'id'=>'borderColor']) !!}
                        </div>

                        <!-- All Day Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('allDay', 'All Day:') !!}
                            <label class="checkbox-inline">
                                {!! Form::hidden('allDay', false) !!}
                                {!! Form::checkbox('allDay', '1', null) !!} yes
                            </label>
                        </div>

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{!! route('events.index') !!}" class="btn btn-default">Cancel</a>
                        </div>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@push('scripts')

<script>//This section is already yield in scripts, this is intentional for IDE code reformat only.
//    declaring variable for javascript use
    var events = {!! json_encode($events->toArray()) !!} ;

</script>
<script src="{{ asset('js/scripts.js') }}"></script>

@endpush
