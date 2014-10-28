<?php

use Illuminate\Database\Migrations\Migration;

class SetupConfigsTable extends Migration
{
	public function up()
	{
		Schema::create('configs', function($table){
			$table->engine = 'InnoDB';
			$table->string('config_key');
			$table->string('config_value');
			$table->dateTime('created_date')->nullable();
			$table->dateTime('updated_date')->nullable();
			$table->primary('config_key');
		});
	}

	public function down()
	{
		Schema::drop('configs');
	}
}