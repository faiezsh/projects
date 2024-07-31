<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration {

	public function up()
	{
		Schema::create('reports', function(Blueprint $table) {
			$table->integer('course_id')->unsigned()->nullable();
			$table->integer('chat_id')->unsigned()->nullable();
			$table->integer('global_chat_id')->unsigned()->nullable();
			$table->boolean('state');
			$table->datetime('time');
		});
	}

	public function down()
	{
		Schema::drop('reports');
	}
}