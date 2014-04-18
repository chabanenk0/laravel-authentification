<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user = new User;
		$user->email = 'admin@webs2webshop.com';
		$user->password = Hash::make('1234567');
		$user->save();
	}

}