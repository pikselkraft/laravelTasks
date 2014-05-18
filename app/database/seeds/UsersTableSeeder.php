<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();

		User::create([
				'username' => 'wtod',
				'email'    => 'derek.salmon.fr@gmail.com',
				'password' => '1234'
			]);

		User::create([
				'username' => 'toto',
				'email'    => 'toto@gmail.com',
				'password' => '1234'
			]);
	}
}