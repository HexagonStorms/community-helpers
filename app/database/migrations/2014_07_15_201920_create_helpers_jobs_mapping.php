<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpersJobsMapping extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('helpers_jobs_mapping', function($table)
		{
			$table->integer('user_id')->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
		    $table->integer('jobs_id')->unsigned();
		    $table->foreign('jobs_id')->references('id')->on('jobs');
		    $table->boolean('is_accepted');
		    $table->primary(array('user_id', 'jobs_id'));
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
		Schema::drop('helpers_jobs_mapping');
	}

}
