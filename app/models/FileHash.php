<?php

class FileHash extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'filehashes';

	/**
	 * The parts of the users table that are fillable.
	 *
	 * @var array
	 */

	protected $fillable = ['hash','filename','doc_id'];
}