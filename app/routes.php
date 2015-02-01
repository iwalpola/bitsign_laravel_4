<?php

/*Setting csrf filter for critical routes*/

Route::when('*', 'csrf', ['post', 'put', 'patch']);

/* Unprotected Index View */

Route::get('/', ['as' => 'home','uses' =>'HomeController@showWelcome']);

/*Routing for Sessions Controller*/

		Route::get('login','SessionsController@create');

		Route::get('logout','SessionsController@destroy');

		Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

/* Protected Route Group */

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

		Route::get('dash', ['as'=>'dashboard', 'uses'=>'DashController@showDash'])->before('auth');
});