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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 60);
			$table->string('email', 100);
			$table->string('password', 100);
			$table->timestamps();
		});

		DB::table('users')->insert(
	        array(
	            'username' => 'admin',
	            'email' => 'admin',
	            'password' => Hash::make('admin')
	        )
	    );
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
