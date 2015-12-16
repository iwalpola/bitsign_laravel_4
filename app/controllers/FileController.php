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
		// PHP File Upload error message codes:
	    // http://php.net/manual/en/features.file-upload.errors.php
		    protected $error_messages = array(
		        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
		        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
		        3 => 'The uploaded file was only partially uploaded',
		        4 => 'No file was uploaded',
		        6 => 'Missing a temporary folder',
		        7 => 'Failed to write file to disk',
		        8 => 'A PHP extension stopped the file upload',
		        'post_max_size' => 'The uploaded file exceeds the post_max_size directive in php.ini',
		        'max_file_size' => 'File is too big',
		        'min_file_size' => 'File is too small',
		        'accept_file_types' => 'Filetype not allowed',
		        'max_number_of_files' => 'Maximum number of files exceeded',
		        'max_width' => 'Image exceeds maximum width',
		        'min_width' => 'Image requires a minimum width',
		        'max_height' => 'Image exceeds maximum height',
		        'min_height' => 'Image requires a minimum height',
		        'abort' => 'File upload aborted',
		        'image_resize' => 'Failed to resize image'
		    );

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
	        // Ignore array member if it's not an UploadedFile object, just to be extra safe
	        if (!is_a($upload, 'Symfony\Component\HttpFoundation\File\UploadedFile')) {
	            continue;
	        }

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