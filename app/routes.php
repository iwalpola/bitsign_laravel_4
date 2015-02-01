<?php

/*Setting csrf filter for critical routes*/

Route::when('*', 'csrf', ['post', 'put', 'patch']);

/*Routing for Signatures Controller*/

Route::resource('signatures', 'SignaturesController', 
	array('only' => array('index', 'create', 'show'))); 

/*Routing for Sessionss Controller*/

Route::get('login','SessionsController@create');

Route::get('logout','SessionsController@destroy');

Route::resource('sessions', 'SessionsController');

/*Routing for Contractss Controller*/

Route::get('contracts/import', ['as' => 'contracts.import', 'uses' => 'ContractsController@import']);

Route::resource('contracts', 'ContractsController', 
	array('only' => array('index', 'create', 'show')));

/* Index View */

Route::get('/', ['as' => 'home','HomeController@showWelcome']);

/* Dash View Loader */

Route::get('dash', 'DashController@showDash');