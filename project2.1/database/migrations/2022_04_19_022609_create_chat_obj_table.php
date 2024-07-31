<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatObjTable extends Migration {

	public function up()
	{
		Schema::create('chat_obj', function(Blueprint $table) {
			$table->integer('chat_id')->unsigned();
			$table->string('path');
		});
	}

	public function down()
	{
		Schema::drop('chat_obj');
	}
}