<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(
    		array('username' => 'Administrador', 
					'email' => 'admin@enteluc.cl',
					'active'=>'1',
					'documento'=>'',
					'esAdmin'=>'1',
					'password'=> Hash::make('Entel@123321'))
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('email', 'admin@enteluc.cl')->delete();
	}

}
