<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalChatTable extends Migration {

	public function up()
	{
		Schema::create('global_chat', function(Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->integer('userid')->unsigned();
			$table->string('content');
			$table->string('category')->default('text');
			$table->datetime('time');
		});
	}

	public function down()
	{
		Schema::drop('global_chat');
	}
}