<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $memorandum->name !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $memorandum->description !!}</p>
</div>

<!-- Tag Field -->
<div class="form-group">
    {!! Form::label('tag', 'Tag:') !!}
    <p>{!! $memorandum->tag !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $memorandum->created_at !!}</p>
</div>

<!-- File Field -->
<div class="form-group">
    {!! Form::label('file', 'File:') !!}
    {{--<p>{!! $memorandum->file !!}</p>--}}
    <iframe src="{{ route('memoranda.showmemo',['id'=>$memorandum->id ])}}" width="95%" height="600px"></iframe>
</div>


