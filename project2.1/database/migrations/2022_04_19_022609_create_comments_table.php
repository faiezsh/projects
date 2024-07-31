<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

	public function up()
	{
		Schema::create('comments', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->integer('global_chat_id')->unsigned();
			$table->integer('userid')->unsigned();
			$table->string('category')->default('text');
			$table->string('content');
			$table->integer('like_count');
			$table->datetime('time');
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}
