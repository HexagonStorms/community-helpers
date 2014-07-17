<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reviews', function($table)
		{
		    $table->integer('job_id')->unsigned();
		    $table->foreign('job_id')->references('id')->on('jobs');
		    $table->integer('rating')->nullable();
		    $table->text('comment')->nullable();
		    $table->primary('job_id');
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
		Schema::drop('reviews');
	}


}
