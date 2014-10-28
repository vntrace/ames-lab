<?php
use Illuminate\Database\Migrations\Migration;

/**
 * Class SetupPostsTable
 */
class SetupPostsTable extends Migration
{
	/**
	 * Run the migration
	 * @return [type] [description]
	 */
	public function up()
	{
		Schema::create('posts', function($table){
			$table->engine = 'InnoDB';
			$table->increments('id')->unsinged();
			$table->string('title');
			$table->longText('content');
			$table->string('tags')->nullable();
			$table->integer('created_by');
			$table->dateTime('created_date');
			$table->dateTime('updated_date');
			$table->dateTime('deleted_at')->nullable();
		});
	}

	/**
	 * Reverse the migration
	 * @return [type] [description]
	 */
	public function down()
	{
		Schema::drop('posts');
	}
}