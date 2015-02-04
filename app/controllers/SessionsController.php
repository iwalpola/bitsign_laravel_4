<?php

class SessionsController extends \BaseController {

	
	/**
	 * Show the form for creating a new session.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created session in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		$attempt = Auth::attempt(['username' => Input::get("username"), 'password' => Input::get("password")]);
		if($attempt) return Redirect::intended('dashboard');
		return Redirect::route('login')->withInput()->withInvalid(true);
	}

	/**
	 * Destroy the current session and redirect to home page.
	 * DELETE /sessions/{id}
	 *
	 * @return a redirection to the homepage
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home();
	}

}