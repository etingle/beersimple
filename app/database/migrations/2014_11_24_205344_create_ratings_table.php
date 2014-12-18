<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ratings', function($table) {
		$table->increments('id');

		$table->integer('user_id')->unsigned();
		$table->foreign('user_id')->references('id')->on('users');
		$table->integer('beer_id')->unsigned();
		$table->foreign('beer_id')->references('id')->on('beers');
		$table->tinyInteger('rating');
		$table->string('review');
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
		Schema::drop('ratings');
	}

}
