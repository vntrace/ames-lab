<?php

use Illuminate\Database\Migrations\Migration;

class SetupProjectsTable extends Migration
{
	public function up()
	{
		Schema::create('projects', function($table){
			$table->engine = 'InnoDB';
			$table->increments('id')->unsigned();
			$table->mediumText('name');
			$table->longText('content');
			$table->integer('created_by');
			$table->dateTime('created_date');
			$table->dateTime('updated_date');
			$table->string('tags')->nullable();
			$table->string('members')->nullable();
			$table->dateTime('deleted_at')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}