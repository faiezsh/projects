<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseWordTable extends Migration {

	public function up()
	{
		Schema::create('course_word', function(Blueprint $table) {
			$table->integer('course_id')->unsigned();
			$table->integer('keyword_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('course_word');
	}
}