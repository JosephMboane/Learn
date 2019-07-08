<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePessoaPerdidaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pessoa_perdida', function(Blueprint $table)
		{
			$table->integer('id_p_perdida', true);
			$table->string('nome', 45)->nullable();
			$table->char('sexo', 1)->nullable();
			$table->date('data_nasc')->nullable();
			$table->string('nome_responsavel', 45)->nullable();
			$table->integer('contacto_responsavel')->nullable();
			$table->string('nacionalidade', 45)->nullable();
			$table->string('naturalidade', 45);
			$table->integer('estado')->nullable();
			$table->integer('situacao_vital')->nullable()->default(1);
			$table->integer('id_foto')->index('fk_pessoa_perdida_foto1_idx');
			$table->timestamps();
			$table->integer('user_id')->nullable()->index('pessoa_perdida_user_id_foreign');
			$table->primary(['id_p_perdida','id_foto']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pessoa_perdida');
	}

}
