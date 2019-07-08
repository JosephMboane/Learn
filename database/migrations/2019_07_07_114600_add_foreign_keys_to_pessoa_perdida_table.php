<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPessoaPerdidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pessoa_perdida', function(Blueprint $table)
		{
			$table->foreign('id_foto', 'fk_pessoa_perdida_foto1')->references('id_foto')->on('foto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id')->references('id_usuario')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoa_perdida', function(Blueprint $table)
		{
			$table->dropForeign('fk_pessoa_perdida_foto1');
			$table->dropForeign('pessoa_perdida_user_id_foreign');
		});
	}

}
