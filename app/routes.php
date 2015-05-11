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

/* Auth Protected Route Group */

Route::group(array('before' => 'auth'), function()
{
		    /*Routing for Signatures Controller*/

		Route::resource('signatures', 'SignaturesController', 
			array('only' => array('index', 'create', 'show')));

		/*Routing for Contracts Controller*/

		Route::get('contracts/import', ['as' => 'contracts.import', 'uses' => 'ContractsController@import']);

		Route::resource('contracts', 'ContractsController', 
			array('only' => array('index', 'create', 'show')));

		/* Dash View Loader */

		Route::get('dashboard', ['as'=>'dashboard', 'uses'=>'DashController@showDash']);
		Route::get('dashboard/index', 'DashController@index');

		Route::post('server/handleUploads','TestController@processUpload');

});

