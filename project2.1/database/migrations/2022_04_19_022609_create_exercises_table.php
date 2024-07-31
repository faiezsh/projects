<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesTable extends Migration {

	public function up()
	{
		Schema::create('exercises', function(Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->integer('course_id')->unsigned();
			$table->text('question');
		});
	}

	public function down()
	{
		Schema::drop('exercises');
	}
}