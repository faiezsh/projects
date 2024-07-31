<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{

	public function up()
	{
		Schema::create('contents', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->integer('course_id')->unsigned();
			$table->string('type');
			$table->string('path')->nullable();
			$table->string('typeFile')->default('pdf');
		});
	}

	public function down()
	{
		Schema::drop('contents');
	}
}
