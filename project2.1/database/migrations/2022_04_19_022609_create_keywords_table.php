<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeywordsTable extends Migration
{

	public function up()
	{
		Schema::create('keywords', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->string('word')->unique();
			$table->integer('testid')->unsigned();
			$table->integer('categoryid')->unsigned();
			$table->boolean('formal');
		});
	}

	public function down()
	{
		Schema::drop('keywords');
	}
}
