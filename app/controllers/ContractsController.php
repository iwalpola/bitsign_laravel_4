<?php

class ContractsController extends \BaseController {

	/**
	 * Display a listing of the contracts created by the current user
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
	 * Show the form for creating a new contract.
	 *
	 * @return Response
	 */
	public function create()
	{
		//returns the TinyMCE Editor
		
		return View::make('contracts.create');
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
	
	public function store()
	{
		// get input
 		$creator_id = Auth::user()->id;
        $contract_title = Input::get( 'contract_title' );
        $contract_content = Input::get( 'contract_content' );

        // store in database
        $contract = new Contract;
        $contract->title = $contract_title;
        $contract->content = $contract_content;
        $contract->creator_id = $creator_id;
        $contract->save();
        $contract_id = $contract->getKey();
 
        $response = array(
            'status' => 'success',
            'contract_id' => $contract_id
        );
 
        return Response::json( $response );
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