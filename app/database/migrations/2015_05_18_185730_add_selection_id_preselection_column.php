<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSelectionIdPreselectionColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('selection', function($table)
		{
			$table->engine = 'MyISAM';
			$table->integer('id_preselection')->after('id_user');

			$table->foreign('id_preselection')->references('id')->on('preselection')
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
		$table->dropColumn('id_preselection');
	}

}
