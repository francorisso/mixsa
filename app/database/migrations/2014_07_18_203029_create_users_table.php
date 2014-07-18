<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
	    {
	    	//needed info
	        $table->increments('id');
	        $table->string('email')->unique();
	        $table->string('username')->unique();
	        $table->string('password',64);
	        $table->string('remember_token',100);
	        //common info
	        $table->string('name');
	        
	        $table->timestamps();
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
