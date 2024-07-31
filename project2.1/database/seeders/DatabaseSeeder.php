<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{

	public function run()
	{
		User::insert([
			'name' => 'admin 1',
			'password' => bcrypt('a123456789'),
			'email' => 'admin@edu.com',
			'roll' => 0,
			'age' => 25
		]);
	}
}
