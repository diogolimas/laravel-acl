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
    Route::get('permissions', 'Painel\PermissionController@index');
    Route::get('permission/{id}/roles', 'Painel\PermissionController@roles');
    //RoleController    
    Route::get('roles', 'Painel\RoleController@index');

    Route::get('users', 'Painel\UserController@index');
    Route::get('role/{id}/permissions', 'Painel\RoleController@permissions');
    Route::get('user/{id}/roles', 'Painel\UserController@roles');
    
});

Route::get('/home', 'Painel\PainelController@index')->name('home');

Route::get('/post/{id}/update', 'HomeController@update')->name('home');

Route::get('/roles/permissions', 'HomeController@rolesPermissions');