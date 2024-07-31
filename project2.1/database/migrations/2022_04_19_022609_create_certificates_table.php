<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificatesTable extends Migration
{

	public function up()
	{
		Schema::create('certificates', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->integer('userid')->unsigned();
			$table->string('word');
		});
	}

	public function down()
	{
		Schema::drop('certificates');
	}
}
