<?php

/* Index View */

Route::get('/', 'HomeController@showWelcome');

/* Dash View Loader */

Route::get('/dash', 'DashController@showDash');