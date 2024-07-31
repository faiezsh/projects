<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestAnswersTable extends Migration
{

	public function up()
	{
		Schema::create('test_answers', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->text('description');
			$table->boolean('correct');
		});
	}

	public function down()
	{
		Schema::drop('test_answers');
	}
}
