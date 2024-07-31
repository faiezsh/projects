<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalChatCatagoryTable extends Migration {

	public function up()
	{
		Schema::create('global_chat_catagory', function(Blueprint $table) {
			$table->integer('global_chat_id')->unsigned();
			$table->string('path');
		});
	}

	public function down()
	{
		Schema::drop('global_chat_catagory');
	}
}