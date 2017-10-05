<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\DataTables\Admin\UsersDataTable;
use Illuminate\Support\Facades\App;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;
use Response;
use Auth;

class UsersController extends Controller
{

    /**
     * Display a listing of the Users.
     *
     * @param UsersDataTable $usersDataTable
     * @return Response
     */
    public function index(UsersDataTable $usersDataTable){

        if(! Gate::allows('browse_user')){
            return abort(401);
        }

        return $usersDataTable->render('admin.users.index');
    }



    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('add_user')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\Admin\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUsersRequest $request)
    {
        if (! Gate::allows('add_user')) {
            return abort(401);
        }
        $user = User::create($request->all());
        $roles = $request->input('roles') ? $request->input('roles') : [];
        $user->assignRole($roles);

        return redirect()->route('admin.users.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('edit_user')) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'name');

        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\Admin\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsersRequest $request, $id)
    {
        if (! Gate::allows('edit_user')) {
            return abort(401);
        }
        $user = User::findOrFail($id);
//        $newArray = array_remove_null($array);
//        $request = array_remove_null($request->all());
//dd($request);
        $user->update(arrayRemoveNull($request->all()));

        $roles = $request->input('roles') ? $request->input('roles') : [];

        $user->syncRoles($roles);

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (! Gate::allows('delete_user')) {
            return abort(401);
        }
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin.users.index');
    }

//    /**
//     * Delete all selected User at once.
//     *
//     * @param Request $request
//     */
//    public function massDestroy(Request $request)
//    {
//        if (! Gate::allows('users_manage')) {
//            return abort(401);
//        }
//        if ($request->input('ids')) {
//            $entries = User::whereIn('id', $request->input('ids'))->get();
//
//            foreach ($entries as $entry) {
//                $entry->delete();
//            }
//        }
//    }
}
