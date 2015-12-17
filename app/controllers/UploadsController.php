<?php

use BitSign\Services\Upload\UploadHandler;

class UploadsController extends BaseController {

	private $uploader;

	function __construct(UploadHandler $uploader){
		$this->uploader = $uploader;
	}

	public function store()
	{
		$uploader->post(true);
	}

	public function show()
	{
		$uploader->get("true");
	}

	public function update()
	{
		
	}

	public function destroy()
	{
		
	}
}