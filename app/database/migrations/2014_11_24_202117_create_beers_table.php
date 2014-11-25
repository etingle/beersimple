<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
		Schema::create('beers', function($table) {

		$table->increments('id');
    	$table->string('beer_name');
    	$table->string('style'); 
    	$table->string('brewery');
    	$table->string('abv');
    	$table->float('rating');
    	$table->integer('number_of_ratings');
    	});
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('beers');

	}

}
