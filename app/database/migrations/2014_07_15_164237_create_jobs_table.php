<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function($table)
		{
			$table->increments('id');
			$table->string('category', 50);
			$table->string('description', 100);
			$table->decimal('price', 5,2);
			$table->boolean('is_complete');
			$table->integer('rating')->nullable();
			$table->date('required_date');
			$table->date('required_time');
			$table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('jobs');
	}

}
