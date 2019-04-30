<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id_usuario', true);
			$table->string('name', 45)->nullable();
			$table->string('email', 45)->nullable()->unique();
			$table->string('password', 150)->nullable();
			$table->string('remember_token', 150);
			$table->timestamps();
			$table->integer('foto_id_foto')->default(1)->index('fk_usuario_foto1_idx');
			$table->primary(['id_usuario','foto_id_foto']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
