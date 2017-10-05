<!-- Id Field -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('id', 'Id:') !!}--}}
    {{--<p>{!! $policy->id !!}</p>--}}
{{--</div>--}}

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $policy->name !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $policy->description !!}</p>
</div>

<!-- Tag Field -->
<div class="form-group">
    {!! Form::label('tag', 'Tag:') !!}
    <p>{!! $policy->tag !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $policy->created_at !!}</p>

</div>

<!-- File Field -->
<div class="form-group">
    {{--{!! Form::label('file', 'File:') !!}--}}
    {{--<p>{!! $policy->file !!}</p>--}}
    <iframe src="{{ route('policies.showpolicy',['id'=>$policy->id ])}}" width="95%" height="600px"></iframe>
    {{--<p><a href="{{ $file }}"> Open File </a> </p>--}}
</div>

{{--<!-- Updated At Field -->--}}
{{--<div class="form-group">--}}
    {{--{!! Form::label('updated_at', 'Updated At:') !!}--}}
    {{--<p>{!! $policy->updated_at !!}</p>--}}
{{--</div>--}}

