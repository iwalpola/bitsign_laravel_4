<?php

/*Setting csrf filter for critical routes*/

Route::when('*', 'csrf', ['post', 'put', 'patch']);

/* Unprotected Index View */

Route::get('/', ['as' => 'home','uses' =>'HomeController@showWelcome']);

/*Routing for Users Controller*/

		Route::get('signup','UsersController@create');

		Route::get('profile', ['before' => 'auth'] , 'UsersController@show');

		Route::resource('users', 'UsersController', ['only' => ['create', 'store', 'show']]);

/*Routing for Sessions Controller*/

		Route::get('login',['as' => 'login', 'uses' => 'SessionsController@create']);

		Route::get('logout','SessionsController@destroy');

		Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

/*Routing, type post for user check*/

		Route::post('signatures/usercheck','SignaturesController@usercheck');

/* Auth Protected Route Group */

Route::group(array('before' => 'auth'), function()
{
		/*Routing for Signatures Controller*/

		Route::resource('signatures', 'SignaturesController', 
			array('only' => array('index')));

		Route::get('signatures/{contr_id}', 'SignaturesController@create');

		/*Routing for File Controller*/

		Route::resource('file', 'FileController', 
			array('only' => array('store')));

		Route::get('file/{id}', ['uses' => 'FileController@create']);

		/*Routing for Contracts Controller*/

		Route::resource('contracts', 'ContractsController', 
			array('only' => array('index', 'create', 'show', 'store')));

		/* Dash View Loader */

		Route::get('dashboard', ['as'=>'dashboard', 'uses'=>'DashController@showDash']);
		Route::get('dashboard/index', 'DashController@index');

});

