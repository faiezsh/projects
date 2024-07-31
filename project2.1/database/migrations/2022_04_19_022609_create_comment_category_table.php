<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentCategoryTable extends Migration {

	public function up()
	{
		Schema::create('comment_category', function(Blueprint $table) {
			$table->integer('comment_id')->unsigned();
			$table->string('path');
			$table->string('type');
		});
	}

	public function down()
	{
		Schema::drop('comment_category');
	}
}