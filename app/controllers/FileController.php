<?php

class FileController extends \BaseController {

	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($data)
	{
		//returns the TinyMCE Editor
		
		return View::make('import.doc')->with('data', $data);
	}


	public function processUpload()
	{
		
		// Function for converting from hexadecimal to ascii

		function hex2str($hex) {
    	$str = '';
    	for($i=0;$i<strlen($hex);$i+=2) $str .= chr(hexdec(substr($hex,$i,2)));
    	return $str;
		}
		
		//Set the upload parameters

		$destinationPath = public_path().'/uploads/';

		//Get files from POST Input
		$all_uploads = Input::file('files'); // your file upload input field in the form should be named 'files' or 'files[]'

		// Make sure it really is an array
	    if (!is_array($all_uploads)) {
	        $all_uploads = array($all_uploads);
	    }

	    $error_messages = array();

	    // Loop through all uploaded files
	    foreach ($all_uploads as $upload) {

	        $validator = Validator::make(
	            array('file' => $upload),
	            array('file' => 'required|mimes:jpeg,png|image|max:1000')
	        );

	        if ($validator->passes()) {
	            $filename        = str_random(6) . '_' . $upload->getClientOriginalName();
	        	$uploadSuccess   = $upload->move($destinationPath, $filename);
				if($uploadSuccess){
			 	$shafile = hash_file('sha256', $destinationPath.'/'.$filename);
			   	$asciistring = hex2str($shafile);
			   	echo $asciistring;// or do a redirect with some message that file was uploaded
				} 
	        } 
	        else {
	            // Collect error messages
	            $error_messages[] = 'File "' . $upload->getClientOriginalName() . '":' . $validator->messages()->first('file');
	        }
	    }
		
	
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