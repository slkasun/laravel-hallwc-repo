<?php

	Form::macro('date', function()
	{
	    return '<input type="date">';
	});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::get('admin/logout',  array('as' => 'admin.logout',      'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login',   array('as' => 'admin.login',       'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::post('admin/login',  array('as' => 'admin.login.post',  'uses' => 'App\Controllers\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin' , 'before' => 'auth'), function()
{
    Route::get('/', 'App\Controllers\Admin\DashboardController@index');
    Route::resource('sliders', 'App\Controllers\Admin\SlidersController');
    Route::resource('pages', 'App\Controllers\Admin\PagesController');
    Route::resource('admins', 'App\Controllers\Admin\AdminsController');
    Route::resource('forms-category', 'App\Controllers\Admin\FormsCategoryController');
    Route::resource('forms-category.forms', 'App\Controllers\Admin\FormsCategoryFormsController');
    Route::resource('emails-category', 'App\Controllers\Admin\EmailsCategoryController');
    Route::resource('emails-category.emails', 'App\Controllers\Admin\EmailsCategoryEmailsController');
    Route::resource('links', 'App\Controllers\Admin\LinksController');
    Route::resource('files', 'App\Controllers\Admin\FilesController');
});


/*
|--------------------------------------------------------------------------
| Main Site Routes
|--------------------------------------------------------------------------
|
*/

Route::controller('/', 'HomeController');