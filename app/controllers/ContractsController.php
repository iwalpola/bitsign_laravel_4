<?php

class ContractsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /contracts
	 *
	 * @return Response
	 */
	public function index()
	{
		//returns the fetched contracts index
		return View::make('contracts.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//returns the TinyMCE Editor
		return View::make('contracts.create');
	}

public function import()
	{
		//returns an uploader
		return View::make('import.doc');
	}
	/**
	 * Display the specified resource.
	 * GET /contracts/{id}
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
	 * GET /contracts/{id}/edit
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
	 * PUT /contracts/{id}
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
	 * DELETE /contracts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}