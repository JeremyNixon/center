<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Quiz extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('quizzes', function($table){
			$table->increments('id');
			$table->integer('q1');
			$table->integer('q2');
			$table->integer('q3');
			$table->integer('q4');
			$table->integer('q5');
			$table->integer('q6');
			$table->integer('q7');
			$table->integer('q8');
			$table->integer('q9');
			$table->integer('q10');
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
		Schema::drop('quizzes');
	}

}
