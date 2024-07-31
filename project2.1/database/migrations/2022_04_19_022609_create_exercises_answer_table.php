<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesAnswerTable extends Migration
{

	public function up()
	{
		Schema::create('exercises_answer', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->text('description');
			$table->boolean('correct');
		});
	}

	public function down()
	{
		Schema::drop('exercises_answer');
	}
}
