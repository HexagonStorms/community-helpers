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