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

        $categories = [
        	'1' => 'Landscaping',
        	'2' => 'Outdoor',
        	'3' => 'Indoor',
        	'4' => 'Pets',
        	'5' => 'Moving',
        	'6' => 'Other'
        ];
        $landscaping_jobs = [
        	'1' => 'Mow the grass',
        	'2' => 'Pull weeds',
        	'3' => 'Plant garden seeds',
        	'4' => 'Trim the bushes',
        	'5' => 'Water the lawn',
        ];
        $indoor_jobs = [
        	'1' => 'Vacuum the front room',
        	'2' => 'Clean the windows',
        	'3' => 'Dust the blinds',
        	'4' => 'Replace the light bulbs',
        	'5' => 'Take out the trash'
        ];
        $outdoor_jobs = [
        	'1' => 'Powerwash the driveway',
        	'2' => 'Clean bird degree from front porch',
        	'3' => 'Wash the windows',
        	'4' => 'Clear leaves from gutter',
        	'5' => 'Pull strawberries from garden'
        ];

        $pet_jobs = [
        	'1' => 'Walk the dog',
        	'2' => 'Give the dog a bathe',
        	'3' => 'Clean out bird cage',
        	'4' => 'Clean fish bowl',
        	'5' => 'Take out cat litter'
        ];

        $moving_jobs = [
        	'1' => 'Move books from office to garage',
        	'2' => 'Move boxes to the garage',
        	'3' => 'Dust books and move into library',
        	'4' => 'Pack up bowls from the kitchen',
        	'5' => 'Move office items to the dumpster'
        ];

        $other_jobs = [
        	'1' => 'Pick up milk and eggs from H-E-B',
        	'2' => 'Take clothes to the Thrift Store',
        	'3' => 'Prepare a nice lunch for 4 friends',
        	'4' => 'Bake cookies',
        	'5' => 'Organize documents in office'
        ];

        for ($i = 1; $i <= 30; $i++)
        {
        	$job = new Job();
            $job->category = $categories[rand(1,6)];
           	switch($job->category)
           	{
           		case 'Landscaping':
           			$job->description = $landscaping_jobs[rand(1,5)];
           			break;
           		case 'Indoor':
           			$job->description = $indoor_jobs[rand(1,5)];
           			break;
           		case 'Outdoor':
           			$job->description = $outdoor_jobs[rand(1,5)];
           			break;
           		case 'Pets':
           			$job->description = $pet_jobs[rand(1,5)];
           			break;
           		case 'Moving':
           			$job->description = $moving_jobs[rand(1,5)];
           			break;
           		case 'Other':
           			$job->description = $other_jobs[rand(1,5)];
           			break;
           	}

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