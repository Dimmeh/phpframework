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

Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'blog.index'
]);

Route::get('post/{id}',[
    'uses' => 'PostController@getPost',
    'as' => 'blog.post'
]);

Route::get('post/{id}/like',[
    'uses' => 'PostController@getLikePost',
    'as' => 'blog.post.like'
]);

Route::get('about', function(){
    return view('other.about');
})->name('other.about');

Route::get('reparation', function(){
    return view('reparation.index');
})->name('reparation.index');

Route::post('reparation/create/{role}',[
    'uses' => 'ReparationController@postReparationCreate',
    'as' => 'reparation.create'
]);

Route::get('users/{id}',[
    'uses' => 'UsersController@getUserById',
    'as' => 'users.index'
]);

Route::get('users/edit/{id}',[
    'uses' => ['UsersController@getUserById', 'UsersController@getMyReparations'],
    'as' => 'users.edit'
]);

Route::group(['prefix' => 'admin'], function(){
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    Route::group(['prefix' => 'users'], function (){
        Route::get('customers',[
            'uses' => 'UsersController@getCustomers',
            'as' => 'admin.users.customers'
        ]);

        Route::get('contributors',[
            'uses' => 'UsersController@getContributors',
            'as' => 'admin.users.contributors'
        ]);

        Route::get('create',function(){
            return view('admin.users.create');
        })->name('admin.users.create');
    });

    Route::group(['prefix' => 'reparation'], function (){

        Route::get('edit/{id}', [
            'uses' => 'ReparationController@getReparationById',
            'as' => 'admin.reparation.edit'
        ]);

        Route::get('update', [
            'uses' => 'ReparationController@putReparationUpdate',
            'as' => 'admin.reparation.edit'
        ]);

        Route::post('update', [
            'uses' => 'ReparationController@putReparationUpdate',
            'as' => 'admin.reparation.edit'
        ]);

    });

    Route::get('delete/{id}', [
        'uses' => 'ReparationController@getReparationDelete',
        'as' => 'admin.delete'
    ]);

    Route::get('reparations',[
        'uses' => 'ReparationController@getReparations',
        'as' => 'admin.reparations'
    ]);

    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);
//
//    Route::get('edit/{id}', [
//        'uses' => 'PostController@getAdminEdit',
//        'as' => 'admin.edit'
//    ]);

    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');