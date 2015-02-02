<?php

class DashController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Dash Controller
	|--------------------------------------------------------------------------
	|
	*/

	public function showDash()
	{
		return View::make('layouts.dashboard');
	}
	public function index()
	{
		return View::make('dashboard.index');
	}

}