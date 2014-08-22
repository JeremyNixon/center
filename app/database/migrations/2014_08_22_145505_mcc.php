<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mcc extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('scams', function($table){
			$table->increments('id');
            $table->string('title');
			$table->text('content');
			$table->string('type');
			$table->timestamps();

		});

		Schema::create('problems', function($table){
			$table->increments('id');
            $table->string('title');
			$table->text('content');
			$table->timestamps();

		});

		Schema::create('legislation', function($table){
			$table->increments('id');
            $table->string('title');
			$table->text('content');
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
		//
		Schema::drop('scams');
		Schema::drop('problems');
		Schema::drop('legislation');
	}

}
