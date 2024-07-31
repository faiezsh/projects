<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesChoiceTable extends Migration {

	public function up()
	{
		Schema::create('exercises_choice', function(Blueprint $table) {
			$table->integer('exercises_id')->unsigned();
			$table->integer('answer_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('exercises_choice');
	}
}