<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
        <p class="help-block"></p>
        @if($errors->has('name'))
            <p class="help-block">
                {{ $errors->first('name') }}
            </p>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-xs-12 form-group">
        {!! Form::label('permission', 'Permissions', ['class' => 'control-label']) !!}
        {!! Form::select('permission[]', $permissions, old('permission'), ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
        <p class="help-block"></p>
        @if($errors->has('permission'))
            <p class="help-block">
                {{ $errors->first('permission') }}
            </p>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-xs-12 form-group">
    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
        <a href="{!! route('admin.roles.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>

@push('css')
<link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" >
<link rel="stylesheet" href="{{ asset('plugins/selec2-bootstrap-theme/dist/select2-bootstrap.min.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('plugins/select2/dist/css/select2.full.min.js') }}"></script>
{{--<script src="{{ asset('plugins/duallistbox/dist/dual-list-box.min.js') }}"></script>--}}
<script>
    $( ".select2" ).select2();
</script>
@endpush