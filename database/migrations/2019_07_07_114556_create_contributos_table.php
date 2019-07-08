<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContributosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contributos', function(Blueprint $table)
		{
			$table->integer('id_contribute', true);
			$table->string('content', 600);
			$table->timestamps();
			$table->integer('id_p_perdida');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contributos');
	}

}
