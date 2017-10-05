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
    {!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
    <p class="help-block"></p>
    @if($errors->has('email'))
      <p class="help-block">
        {{ $errors->first('email') }}
      </p>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-xs-12 form-group">
    {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
    <p class="help-block"></p>
    @if($errors->has('password'))
      <p class="help-block">
        {{ $errors->first('password') }}
      </p>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-xs-6 form-group">
    {!! Form::label('roles', 'Roles*', ['class' => 'control-label']) !!}
    {!! Form::select('roles[]', $roles, old('roles') ? old('role') : $user->roles()->pluck('name', 'name'), ['class' => 'form-control js-example-basic-multiple', 'multiple' => 'multiple', 'required' => '']) !!}
    <p class="help-block"></p>
    @if($errors->has('roles'))
      <p class="help-block">
        {{ $errors->first('roles') }}
      </p>
    @endif
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
    $( ".js-example-basic-multiple" ).select2();
</script>
@endpush