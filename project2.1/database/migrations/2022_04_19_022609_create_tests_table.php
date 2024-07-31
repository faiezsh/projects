<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{

	public function up()
	{
		Schema::create('tests', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->text('question')->unique();
			$table->integer('next_question_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('tests');
	}
}
