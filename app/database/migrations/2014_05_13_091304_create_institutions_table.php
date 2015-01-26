<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('institutions', function(Blueprint $table)
		{
			$table->increments('institution_id');
			$table->string('name');
			$table->string('description',1000);
			$table->string('email');
			$table->string('website');
			$table->string('location');
			$table->tinyInteger('state');
			$table->string('address');
			//$table->foreign('admin')->references('uid')->on('users');
			$table->string('cover_photo');
			$table->string('thumbnail');
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('institutions');
	}

}
