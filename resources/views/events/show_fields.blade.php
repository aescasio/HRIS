<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $event->id !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $event->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $event->description !!}</p>
</div>

<!-- Start Field -->
<div class="form-group">
    {!! Form::label('start', 'Start:') !!}
    <p>{!! $event->start !!}</p>
</div>

<!-- End Field -->
<div class="form-group">
    {!! Form::label('end', 'End:') !!}
    <p>{!! $event->end !!}</p>
</div>

<!-- Background Color Field -->
<div class="form-group">
    {!! Form::label('backgroundColor', 'Background Color:') !!}
    <p>{!! $event->backgroundColor !!}</p>
</div>

<!-- Border Color Field -->
<div class="form-group">
    {!! Form::label('borderColor', 'Border Color:') !!}
    <p>{!! $event->borderColor !!}</p>
</div>

<!-- All Day Field -->
<div class="form-group">
    {!! Form::label('allDay', 'All Day:') !!}
    <p>{!! $event->allDay !!}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{!! $event->url !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $event->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $event->updated_at !!}</p>
</div>

