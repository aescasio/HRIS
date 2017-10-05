@if( ! Auth::guest())
    <li class="{{ Request::is('policies*') ? 'active' : '' }}">
        <a href="{!! route('policies.index') !!}"><i class="fa fa-edit"></i><span>Policies</span></a>
    </li>

    <li class="{{ Request::is('memoranda*') ? 'active' : '' }}">
        <a href="{!! route('memoranda.index') !!}"><i class="fa fa-edit"></i><span>Memoranda</span></a>
    </li>

    <li class="{{ Request::is('events*') ? 'active' : '' }}">
        <a href="{!! route('events.index') !!}"><i class="fa fa-edit"></i><span>Events</span></a>
    </li>

    <li class="{{ Request::is('employess*') ? 'active' : '' }}">
        <a href="{!! route('employees.index') !!}"><i class="fa fa-edit"></i><span>201</span></a>
    </li>

    <li class="treeview">
        <a href="#">
            <i class="fa fa-users"></i>
            <span class="title">User Management</span>
            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
        </a>
        <ul class="treeview-menu">
            {{--        <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">--}}
            <li class="">
                <a href="{{ route('admin.permissions.index')}}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">
                        @lang('global.permissions.title')
                    </span>
                </a>
            </li>
            {{--<li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">--}}
            <li class="">
                <a href="{{ route('admin.roles.index') }}">
                    <i class="fa fa-briefcase"></i>
                    <span class="title">
                        @lang('global.roles.title')
                    </span>
                </a>
            </li>
            {{--<li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">--}}
            <li class="">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">
                        @lang('global.users.title')
                    </span>
                </a>
            </li>
        </ul>
    </li>

    {{--<li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">--}}
    <li class="">
        <a href="{{ route('auth.change_password') }}">
            <i class="fa fa-key"></i>
            <span class="title">
                @lang('global.app_change_password')
            </span>
        </a>
    </li>
@else
    {{-- Menu for guest user --}}
    <li class="{{ Request::is('policies*') ? 'active' : '' }}">
        <a href="{!! route('policies.index') !!}"><i class="fa fa-edit"></i><span>Policies</span></a>
    </li>

    <li class="{{ Request::is('memoranda*') ? 'active' : '' }}">
        <a href="{!! route('memoranda.index') !!}"><i class="fa fa-edit"></i><span>Memoranda</span></a>
    </li>

    <li class="{{ Request::is('events*') ? 'active' : '' }}">
        <a href="{!! route('events.index') !!}"><i class="fa fa-edit"></i><span>Events</span></a>
    </li>

@endif

