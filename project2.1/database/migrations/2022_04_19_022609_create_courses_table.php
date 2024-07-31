<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{

	public function up()
	{
		Schema::create('courses', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->string('name');
			$table->integer('userid')->unsigned();
			$table->float('rate')->default(5.0);
			$table->datetime('time');
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}
