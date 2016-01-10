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

		Schema::create('legislations', function($table){
			$table->increments('id');
            $table->string('title');
			$table->text('content');
			$table->timestamps();

		});

		Schema::create('meetings', function($table){
			$table->increments('id');
			$table->text('content');
			$table->string('type');
			$table->timestamps();

		});

		Schema::create('blogs', function($table){
			$table->increments('id');
            $table->string('title');
            $table->string('author');
			$table->text('content');
			$table->timestamps();

		});

		Schema::create('members', function($table){
			$table->increments('id');
            $table->string('name');
            $table->string('link');
			$table->timestamps();

		});

		Schema::create('officers', function($table){
			$table->increments('id');
            $table->string('name');
            $table->string('title');
			$table->timestamps();

		});


		Schema::create('agencies', function($table){
			$table->increments('id');
            $table->string('name');
            $table->string('link');
			$table->timestamps();

		});

		Schema::create('secretaries', function($table){
		$table->increments('id');
        $table->string('name');
        $table->string('address');
        $table->string('phone');
        $table->string('fax');
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
		Schema::drop('secretaries');
		Schema::drop('agencies');
		Schema::drop('officers');
		Schema::drop('members');
		Schema::drop('blogs');
		Schema::drop('meetings');
		Schema::drop('legislations');
		Schema::drop('problems');
		Schema::drop('scams');
		
		
	}

}
