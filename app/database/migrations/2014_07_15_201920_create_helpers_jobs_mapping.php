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
		    $table->integer('job_id')->unsigned();
		    $table->foreign('job_id')->references('id')->on('jobs');
		    $table->boolean('is_accepted')->default(False);
		    $table->primary(array('user_id', 'job_id'));
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
