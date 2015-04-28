<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('options', function(Blueprint $table)
		{
			$table->engine = 'MyISAM';
			$table->increments('id');
			$table->string('name', 255);
			$table->string('description', 255)->nullable();
			$table->string('image', 255);
			$table->integer('id_subcategories');
			$table->timestamps();

			$table->foreign('id_subcategories')->references('id')->on('subcategories')
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
		Schema::drop('options');
	}

}
