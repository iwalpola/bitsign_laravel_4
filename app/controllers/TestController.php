<?php

class TestController extends BaseController {

	public function returnHome()
	{
		return View::make('layouts/index');
	}

	public function returnUser()
	{
		return View::make('layouts/userMaster');
	}

	public function processUpload()
	{
		$file = Input::file('file'); // your file upload input field in the form should be named 'file'

		$rules = array(
  		  'file' => 'mimes:jpeg,bmp,png,pdf,doc,docx'
		);

		$inputs = array('file' => $file);
 
		$validation = Validator::make($inputs, $rules);

		if($validation->passes())
		{
			$destinationPath = public_path().'/uploads/';
			$filename        = str_random(6) . '_' . $file->getClientOriginalName();
	        $uploadSuccess   = $file->move($destinationPath, $filename);
			if( $uploadSuccess ) 
			{
			   $sha1file = hash_file('sha256', $destinationPath.'/'.$filename);
			   echo $sha1file;// or do a redirect with some message that file was uploaded
			} 
			else 
			{
			   return Response::json('error', 400);
			}
		}
		else
		{
			return 'sorry , file type is not supported';
		}
	}
}