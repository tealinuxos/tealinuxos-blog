<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahColummBug extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bugs', function ($table) {
			$table->enum('status', ['uncheck', 'checked', 'fix']);
		});
	}

	/**
	 * Reverse the migrations.
	 *foo
	 * @return void
	 */
	public function down()
	{
		//
	}

}
