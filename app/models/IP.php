<?php

class IP extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ip';

	/**
	 * The parts of the users table that are fillable.
	 *
	 * @var array
	 */

	protected $fillable = ['title','content','creator_id'];
}