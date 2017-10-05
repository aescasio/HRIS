@section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%']) !!}

@section('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection
{{--<table class="table table-responsive" id="roles-table">--}}
    {{--<thead>--}}
        {{--<th>Name</th>--}}
        {{--<th colspan="3">Action</th>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--@foreach($roles as $role)--}}
        {{--<tr>--}}
            {{--<td>{!! $role->name !!}</td>--}}
            {{--<td>--}}
                {{--{!! Form::open(['route' => ['admin.roles.destroy', $role->id], 'method' => 'delete']) !!}--}}
                {{--<div class='btn-group'>--}}
                    {{--<a href="{!! route('admin.roles.show', [$role->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    {{--<a href="{!! route('admin.roles.edit', [$role->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            {{--</td>--}}
        {{--</tr>--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
{{--</table>--}}