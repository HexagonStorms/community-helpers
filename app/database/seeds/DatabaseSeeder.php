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
		$this->call('JobsTableSeeder');
		$this->call('ReviewsTableSeeder');
	}
}

class UsersTableSeeder extends Seeder{

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->first_name = 'Jon';
		$user->last_name = 'Rob';
		$user->email = 'admin@email.com';
		$user->password = Hash::make('password');
		$user->birth_date = '1980-04-19';
		$user->is_helper = '0';
		$user->is_admin = '1';
		$user->street = "123 Any Street";
		$user->city = 'Houston';
		$user->state = 'TX';
		$user->zip = '78209';
		$user->save();

		$user = new User();
		$user->first_name = 'Joe';
		$user->last_name = 'Smith';
		$user->email = 'helper@email.com';
		$user->password = Hash::make('password');
		$user->birth_date = '1999-04-19';
		$user->is_helper = '1';
		$user->is_admin = '0';
		$user->street = "123 New Street";
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78209';
		$user->save();

		$user = new User();
		$user->first_name = 'Dan';
		$user->last_name = 'Jones';
		$user->email = 'creator@email.com';
		$user->password = Hash::make('password');
		$user->birth_date = '1997-04-19';
		$user->is_helper = '0';
		$user->is_admin = '0';
		$user->street = "123 Another Street";
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = '78209';
		$user->save();
	}
}

class JobsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('jobs')->delete();

        for ($i = 1; $i <= 10; $i++)
        {
        	$job = new Job();
            $job->category = 'Category ' . $i;
            $job->description = 'Water my lawn ' . $i;
            $job->price = 10.00;
            $job->is_complete = 0;
            $job->required_date = '2014-07-20';
            $job->required_time = '18:00:45';
            $job->user_id = 1;
            $job->save();
            sleep(1);
        } //end of for loop

    } //end of function run
}

class ReviewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('reviews')->delete();

        for ($i = 1; $i <= 10; $i++)
        {
        	$review = new Review();
        	$review->job_id = $i;
            $review->rating = 5;
            $review->comment = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
            $review->save();
        } //end of for loop

    } //end of function run
}


