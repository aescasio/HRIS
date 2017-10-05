<?php

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    Auth::routes();

    Route::get('/', function ()
    {
        return view('welcome');
    });


    Route::resource('policies', 'PolicyController');

    Route::get('policies/pdf/{policy}', 'PolicyController@showPDF')->name('policies.showpolicy');

    Route::resource('memoranda', 'MemorandumController');

    Route::get('memoranda/pdf/{memorandum}', 'MemorandumController@showPDF')->name('memoranda.showmemo');

    Route::resource('employees', 'EmployeesController');
    Route::delete('employment/{event}', 'EmployeesController@destroyEmployment')->name('events.destroy');

//Route::resource('events', 'EventController');
    Route::post('events', 'EventController@store')->name('events.store');
    Route::get('events', 'EventController@index')->name('events.index');
//Route::get('events/create', 'EventController@create')->name('events.create');
    Route::put('events/{event}', 'EventController@update')->name('events.update');
    Route::get('events/{event}', 'EventController@show')->name('events.show');
    Route::delete('events/{event}', 'EventController@destroy')->name('events.destroy');
    Route::get('events/{event}/edit', 'EventController@edit')->name('events.edit');

//Change Password Routes...

    Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
    Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');
    Route::get('/home', 'HomeController@index');

    Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function ()
    {

        Route::resource('users', 'Admin\UsersController');
//    Route::get('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
        Route::resource('roles', 'Admin\RolesController');
//    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);

//    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    });

    $permissions = [
        'auth',
        'role:Administrator',
        'permission:browse_permission'
    ];

    Route::group(['middleware' => $permissions, 'prefix' => 'admin', 'as' => 'admin.' ], function () {
        Route::resource('permissions', 'Admin\PermissionsController');
    });
