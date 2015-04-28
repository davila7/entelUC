<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('selection', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->integer('id_option');
			$table->integer('id_subcategories');
			$table->integer('id_user');
			$table->timestamps();

			$table->foreign('id_option')->references('id')->on('options')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_subcategories')->references('id')->on('subcategories')
                ->onUpdate('cascade')->onDelete('cascade');
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
		Schema::drop('selection');
	}

}
