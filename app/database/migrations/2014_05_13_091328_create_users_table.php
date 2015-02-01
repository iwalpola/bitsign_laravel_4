<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('uid');
			$table->string('remember_token',100)->nullable();
			$table->string('username',20);
			$table->string('f_name',50);
			$table->string('l_name',50);
			$table->string('email')->unique();
			$table->string('password',40);
			$table->string('p_hint');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
