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
		    $table->integer('jobs_id')->unsigned();
		    $table->foreign('jobs_id')->references('id')->on('jobs');
		    $table->integer('ratings')->nullable();
		    $table->string('comment', 100)->nullable();
		    $table->primary('jobs_id');
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
