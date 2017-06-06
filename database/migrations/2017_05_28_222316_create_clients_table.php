<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('last_name');
			$table->string('identification');
			$table->string('email');
			$table->integer('depart_id')->unsigned();
			$table->foreign('depart_id')->references('id')->on('departs');	
			$table->integer('city_id')->unsigned();
			$table->foreign('city_id')->references('id')->on('cities');	
			$table->string('address');
			$table->string('phone');
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
		Schema::drop('clients');
	}

}
