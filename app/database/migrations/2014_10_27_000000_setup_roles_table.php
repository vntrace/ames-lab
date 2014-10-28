<?php

use Illuminate\Database\Migrations\Migration;

class SetupRolesTable extends Migration
{
	public function up()
	{
		Schema::create('roles', function($table){
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->string('name');
			$table->dateTime('deleted_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('roles');
	}
}