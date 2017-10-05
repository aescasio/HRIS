@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Policy
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($policy, ['route' => ['policies.update', $policy->id], 'method' => 'patch']) !!}

                        @include('policies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection