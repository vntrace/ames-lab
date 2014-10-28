<?php

use Illuminate\Database\Migrations\Migration;

/**
 * Class SetupPostCategoriesTable
 */
class SetupPostCategoriesTable extends Migration
{
	/**
	 * Run the migration
	 * @return [type] [description]
	 */
	public function up()
	{
		Schema::create('post_categories', function($table){
			$table->integer('post_id');
			$table->integer('category_id');
			$table->primary(array('post_id', 'category_id'));
			$table->unique(array('post_id', 'category_id'));
		});
	}

	/**
	 * Reverse the migration
	 * @return [type] [description]
	 */
	public function down()
	{
		Schema::drop('post_categories');
	}
}