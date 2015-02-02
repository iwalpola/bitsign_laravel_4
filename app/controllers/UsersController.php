<?php

class UsersController extends \BaseController {

	/**
	 * Show the Sign Up form
	 * GET /users/create
	 * GET /signup
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.register');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only(['username','f_name','l_name','email','password']);
		$input['password'] = Hash::make(Input::get('password'));
		$valid=1;
		if($valid){
			$newUser = User::create($input);
	    }
	    if($newUser){
	            Auth::login($newUser);
	            return Redirect::route('dashboard');
	        }
        return Redirect::route('user.create')->withInput();
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}