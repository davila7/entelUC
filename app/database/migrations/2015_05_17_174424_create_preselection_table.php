<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreselectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('preselection', function($table)
		{
			$table->engine = 'MyISAM';
    		$table->increments('id');
    		$table->integer('step_one')->nullable();
    		$table->integer('step_two')->nullable();
    		$table->integer('id_user');
    		$table->timestamps();

    		$table->foreign('id_user')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('preselection');
	}

}
