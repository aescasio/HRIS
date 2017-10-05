<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start', 'Start:') !!}
    <div class="input-group date" id="start">
        {!! Form::date('start', date("m/d/Y h:i a", strtotime( $event->start)), ['class' => 'form-control','data-inputmask'=>'"alias": "mm/dd/yyyy hh:mm xm"']) !!}
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>

<!-- End Field -->
<div class="form-group col-sm-6">

    {!! Form::label('end', 'End:') !!}
    <div class="input-group date" id="end">
        {!! Form::date('end',  date("m/d/Y h:i a", strtotime( $event->end)) , ['class' => 'form-control','data-inputmask'=>'"alias": "mm/dd/yyyy hh:mm xm"']) !!}
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>

<!-- Background Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('backgroundColor', 'Background Color:') !!}
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

@push('scripts')
<script>//This section is already yield in scripts, this is intentional for IDE code reformat only.
    //    declaring variable for javascript use
    var events = {} ;

</script>
<script src="{{ asset('js/scripts.js') }}"></script>
@endpush