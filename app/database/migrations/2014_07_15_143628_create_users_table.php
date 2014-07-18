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
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('email', 200)->unique();
			$table->string('password', 100);
			$table->date('birth_date');
			$table->string('gender', 1)->nullable();
			$table->boolean('is_helper');
			$table->boolean('is_admin');
			$table->text('bio')->nullable();
			$table->string('user_pic_path', 200)->nullable();
			$table->string('parent_email', 200)->nullable();
			$table->string('parent_phone', 200)->nullable();
			$table->string('parent_first_name')->nullable();
			$table->string('parent_last_name')->nullable();
			$table->string('street', 50);
			$table->string('apt_num', 50)->nullable();
			$table->string('city', 50);
			$table->string('state', 2);
			$table->string('zip', 5);
			$table->string('remember_token', 100)->nullable();
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
