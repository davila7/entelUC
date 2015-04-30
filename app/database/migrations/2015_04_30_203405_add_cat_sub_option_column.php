<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCatSubOptionColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('categories', function($table)
		{
			$table->string('icon')->after('description');
		});
		
		Schema::table('subcategories', function($table)
		{
			$table->string('icon')->after('description');
		});
		
		Schema::table('options', function($table)
		{
			$table->string('icon')->after('description');
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
		Schema::table('categories', function($table)
		{
    		$table->dropColumn('icon');
		});
		
		Schema::table('subcategories', function($table)
		{
    		$table->dropColumn('icon');
		});
		
		Schema::table('options', function($table)
		{
    		$table->dropColumn('icon');
		});
	}

}
