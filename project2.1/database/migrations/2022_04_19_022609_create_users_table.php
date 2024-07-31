<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{

	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->integer('id', true)->unique()->unsigned();
			$table->string('name');
			$table->string('password');
			$table->string('email')->unique();
			$table->tinyInteger('roll')->unsigned();
			$table->tinyInteger('age')->unsigned();
			$table->float('rate')->default(5.0);
			$table->string('state')->default('good');
			$table->datetime('statetime')->nullable();
		});
		User::insert([
			'name' => 'admin 1',
			'password' => bcrypt('a123456789'),
			'email' => 'admin@edu.com',
			'roll' => 0,
			'age' => 25
		]);
	}

	public function down()
	{
		Schema::drop('users');
	}
}
