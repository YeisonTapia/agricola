<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDscTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dsc', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha');
			$table->string('Num_Cont',200);
			$table->string('Actividad');
			$table->double('val_contra');
			$table->char('apor_se_soci',4);
			$table->char('aport_volu',4);
			$table->char('aport_afc',4);
			$table->char('decla_renta',4);
			$table->char('ingre_corr',4);
			$table->char('ingre_anual',4);
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
		Schema::drop('dsc');
	}

}
