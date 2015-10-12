<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hammer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	

	Schema::create('issues', function($table){
			$table->increments('id');
            $table->string('title');
			$table->timestamps();

		});


	Schema::create('essays', function($table){
			$table->increments('id');
			$table->string('author');
            $table->integer('issue_id')->unsigned();
            $table->foreign('issue_id')->references('id')->on('issues');
            $table->string('title');
			$table->text('content');
			$table->timestamps();

		});

	// Schema::create('authors', function($table){
	// 		$table->increments('id');
 //            $table->string('title');
	// 		$table->timestamps();

	// 	});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('essays', function($table) {
			$table->dropForeign('essays_issue_id_foreign'); # table_fields_foreign
		});

		// Schema::drop('authors');
		Schema::drop('issues');
		Schema::drop('essays');
	}

}
