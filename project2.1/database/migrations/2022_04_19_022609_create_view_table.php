<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewTable extends Migration {

	public function up()
	{
		Schema::create('view', function(Blueprint $table) {
			$table->integer('userid')->unsigned();
			$table->integer('course_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('view');
	}
}