<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileHashesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filehashes', function(Blueprint $table)
		{
			$table->increments('file_id');
			$table->string('hash',32);
			$table->integer('contract_id')->length(12)->unsigned();
			$table->timestamps();
			$table->string('type',3);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('filehashes');
	}

}
