<?php

class FileRecord extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'filerecords';

	/**
	 * The parts of the users table that are fillable.
	 *
	 * @var array
	 */

	protected $fillable = ['hash','filename','doc_id'];
}