<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Portal\SiteController@index');




Auth::routes();

Route::group(['prefix' => 'painel'], function () {
    //PainelController
    Route::get('/', 'Painel\PainelController@index');
    //PostController
    Route::get('posts', 'Painel\PostController@index');
    //PermissionController

    //RoleController    

});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/{id}/update', 'HomeController@update')->name('home');

Route::get('/roles/permissions', 'HomeController@rolesPermissions');