<?php
use Illuminate\Database\Migrations\Migration;

/**
 * Created by PhpStorm.
 * User: thanhdc
 * Date: 10/27/14
 * Time: 8:07 AM
 */
class SetupCategoriesTable extends Migration
{
    /**
     * Run the migration
     */
    public function up()
    {
        Schema::create('categories', function($table){
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->mediumText('name');
            $table->dateTime('created_date');
            $table->dateTime('updated_date');
            $table->integer('created_by');
            $table->integer('order')->default(999);
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migration
     */
    public function down()
    {
        Schema::drop('categories');
    }
}