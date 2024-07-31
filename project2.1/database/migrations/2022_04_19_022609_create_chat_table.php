<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatTable extends Migration {

	public function up()
	{
		Schema::create('chat', function(Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->integer('student_id')->unsigned();
			$table->integer('teacher_id')->unsigned();
			$table->string('content')->nullable();
			$table->string('category')->default('text');
			$table->integer('state');
			$table->datetime('time');
		});
	}

	public function down()
	{
		Schema::drop('chat');
	}
}