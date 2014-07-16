<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
	}

}

class UsersTableSeeder extends Seeder{

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->first_name = 'Jon';
		$user->last_name = 'Rob';
		$user->email = 'email@random.com';
		$user->password = Hash::make('password');
		$user->birth_date = '2013-04-19';
		$user->is_helper = '0';
		$user->is_admin = '1';
		$user->street = "123 fake street";
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78209';
		$user->save();
	}
}