<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestChoisesTable extends Migration {

	public function up()
	{
		Schema::create('test_choises', function(Blueprint $table) {
			$table->integer('testid')->unsigned();
			$table->integer('test_answer_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('test_choises');
	}
}