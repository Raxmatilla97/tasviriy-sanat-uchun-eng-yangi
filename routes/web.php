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

Route::get('/', 'IndexController@index')->name('index');




Auth::routes();

//Route::get('/admin-panel', 'admin\AdminPanelController@index')->name('admin');

Route::prefix('admin-panel')->group(function () {

    route::get('/', 'admin\AdminPanelController@index')->name('admin');
    //route::get('users','admin\UserController@index' )->name('users');
    route::resource('yangiliklar','admin\ArticleController' )->names([
        'create' => 'yangilik.qoshish',
        'index' => 'yangiliklar',

    ]);

});
