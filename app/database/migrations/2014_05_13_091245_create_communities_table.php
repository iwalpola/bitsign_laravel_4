<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('communities', function(Blueprint $table)
		{
			$table->increments('cid');
			$table->tinyInteger('state');
			$table->string('description',1000);
			$table->string('cname');
			//$table->foreign('cadmin')->references('uid')->on('users');
			$table->integer('institution_id');
			$table->string('cover-photo');
			$table->string('thumbnail');
			$table->string('year');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('communities');
	}

}
