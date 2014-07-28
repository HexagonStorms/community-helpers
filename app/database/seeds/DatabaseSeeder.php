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
		$user->parent_phone = $faker->phoneNumber;
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

		function check_in_range($start_date, $end_date, $date_from_user)
			{
			   return ( $date_from_user >= $start_date ) && ( $date_from_user <= $end_date );
			}
		for ($i = 0; $i < 50; $i++)
		{
		  	$user = new User();
			$user->gender = rand(0, 1) ? 'male' : 'female';
			if($user->gender == 'male')
			{
				$user->first_name = $faker->firstNameMale;
			}
			else
			{
				$user->first_name = $faker->firstNameFemale;
			}
			$user->last_name = $faker->lastName;
			$user->email = $faker->freeEmail;
			$user->password = Hash::make('password');
			$user->birth_date = rand(0, 1) ? $faker->dateTimeBetween('-80 years', '-60 years') : $faker->dateTimeBetween('-18 years', '-12 years');
			$user->bio = $faker->sentence(100);

			// to determine role based on age
			$start_date = '1930-01-01';
			$end_date = '1970-01-01';
			$date_from_user = $user->birth_date;

			$isUserOld = check_in_range($start_date, $end_date, $date_from_user);
			if ($isUserOld)
			{
				$user->is_helper = 0;
			}
			else
			{
				$user->is_helper = 1;
			}

			$user->is_admin = '0';
			$user->street = $faker->streetAddress;
			$user->city = "$faker->city";
			$user->state = "TX";
			$user->zip = $faker->postcode;
			if ($user->is_helper == 1)
			{
				$user->parent_email = $faker->freeEmail;
				$user->parent_phone = $faker->phoneNumber;
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

        $catArray = [
        	'1' => 'Landscaping',
        	'2' => 'Outdoor',
        	'3' => 'Indoor',
        	'4' => 'Pets',
        	'5' => 'Moving',
        	'6' => 'Other'
        ];
        $catDesc = [
        	'1' => 'Mow the grass',
        	'2' => 'Shovel snow from driveway',
        	'3' => 'Vacuum three rooms',
        	'4' => 'Walk the dog',
        	'5' => 'Move some books into the garage',
        	'6' => 'Replace light bulbs',
        	'7' => 'Take out the trash',
        	'8' => 'Wash the car',
        	'9' => 'Dust the blinds',
        	'10' => 'Pull weeds from the front yard'
        ];

        for ($i = 1; $i <= 30; $i++)
        {
        	$job = new Job();
            $job->category = $catArray[rand(1,6)];
            $job->description = $catDesc[rand(1,10)];
            $job->price = rand(10.00, 50.00);
            $job->is_complete = 0;
            $job->required_date = '2014-08-'.$i;
            $job->required_time = '18:'. $i . ':45';
            $job->user_id = 3;
            $job->save();
            sleep(1);
        } //end of for loop

    } //end of function run
}

class ReviewsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('reviews')->delete();
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++)
        {
        	$review = new Review();
        	$review->job_id = $i;
            $review->rating = rand(1, 5);
            $review->comment = $faker->sentence(50);
            $review->save();
        } //end of for loop

    } //end of function run
}