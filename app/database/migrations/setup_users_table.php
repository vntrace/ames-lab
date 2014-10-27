<?php
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migration
     */
    public function up()
    {
        // Create the `users` table
        Schema::create('users', function($table){
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('username', 128)->index();
            $table->string('email', 128);
            $table->string('display_name');
            $table->string('password');
            $table->string('confirm_code');
            $table->tinyInteger('lock_flg')->default(0);
            $table->dateTime('created_date');
            $table->dateTime('updated_date');
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migration
     */
    public function down()
    {
        Schema::drop('users');
    }
}