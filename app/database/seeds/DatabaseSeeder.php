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
		$faker = Faker\Factory::create();
		$user = new User();
		$user->first_name = 'Admin';
		$user->last_name = 'Joe';
		$user->email = 'admin@email.com';
		$user->password = Hash::make('password');
		$user->birth_date = '1980-04-19';
		$user->is_helper = '0';
		$user->is_admin = '1';
		$user->street = $faker->streetAddress;
		$user->city = $faker->city;
		$user->state = $faker->state;
		$user->zip = $faker->postcode;
		$user->save();

		$user = new User();
		$user->first_name = 'Johnny';
		$user->last_name = 'Helper';
		$user->email = 'helper@email.com';
		$user->password = Hash::make('password');
		$user->birth_date = '2001-02-19';
		$user->gender = 'M';
		$user->bio = "My name is Johnny and I am hard worker. I am saving up to buy a new bicycle";
		$user->is_helper = '1';
		$user->is_admin = '0';
		$user->street = $faker->streetAddress;
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = $faker->postcode;
		$user->parent_email = $faker->freeEmail;
		$user->parent_phone = $faker->cellNumber;
		$user->parent_first_name = $faker->firstName;
		$user->parent_last_name = $faker->lastName;
		$user->save();

		$user = new User();
		$user->first_name = 'Grandma';
		$user->last_name = 'Peggy';
		$user->email = 'creator@email.com';
		$user->password = Hash::make('password');
		$user->birth_date = '1946-04-19';
		$user->is_helper = '0';
		$user->is_admin = '0';
		$user->street = $faker->streetAddress;
		$user->city = 'San Antonio';
		$user->state = 'TX';
		$user->zip = $faker->postcode;
		$user->save();

		for ($i = 0; $i < 25; $i++)
		{
		  	$user = new User();
			$user->first_name = $faker->firstName;
			$user->last_name = $faker->firstName;
			$user->email = $faker->freeEmail;
			$user->password = Hash::make('password');
			$user->birth_date = rand(0, 1) ? $faker->dateTimeBetween('-50 years', '-80 years') : $faker->dateTimeBetween('-10 years', '-18 years');
			$user->gender = rand(0, 1) ? 'male' : 'female';
			$user->bio = $faker->sentence(100);
			if ($user->birth_date->dateTimeBetween('-50 years', '-80 years'))
			{
				$user->is_helper = 0;
			}
			else
			{
				$user->is_helper = 1;
			}
			$user->is_admin = '0';
			$user->street = $faker->streetAddress;
			$user->city = $faker->city;
			$user->state = $faker->state;
			$user->zip = $faker->postcode;
			if ($user->is_helper = 1)
			{
				$user->parent_email = $faker->freeEmail;
				$user->parent_phone = $faker->cellNumber;
				$user->parent_first_name = $faker->firstName;
				$user->parent_last_name = $faker->lastName;
			}

			$user->save();
		}


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
            $job->required_date = '2014-07-'.$i;
            $job->required_time = '18:00:45';
            $job->user_id = rand(1, 3);
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