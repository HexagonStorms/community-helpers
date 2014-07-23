<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::with('')->get();
		$data = array(
			'users' => $users
		);
		return View::make('temp_users.users')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->fails())
		{
			// set flash data
			Session::flash('errorMessage', 'Error: Missing Some Input');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$user = new User();
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->birth_date = Input::get('birth_date');
			$user->is_helper = Input::get('is_helper');
			$user->is_admin = Input::has('is_admin');
			$user->street = Input::get('street');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip = Input::get('zip');
			$user->bio = Input::get('bio');
			$user->user_pic_path = Input::get('user_pic_path');
			$user->parent_email = Input::get('parent_email');
			$user->parent_phone = Input::get('parent_phone');
			$user->parent_first_name = Input::get('parent_first_name');
			$user->parent_last_name = Input::get('parent_last_name');
			$user->apt_num = Input::get('apt_num');
			$user->gender = Input::get('gender');
			$user->save();

			if (Input::hasFile('image') && Input::file('image')->isValid()){

				$user->addUploadImage(Input::file('image'));
				$user->save();
			}

			Auth::loginUsingId($user->id);

			return Redirect::action('UsersController@dashboard_helper', $user->id);
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);
		$job = Job::findOrFail($id);
		$jobIds = array();
		foreach ($user->appliedJobs as $job) {
		 	$jobIds[] = $job->id;
		}
	
		if (count($jobIds) > 0)
		{
			$reviews = Review::with('job')->whereIn('job_id', $jobIds)->orderBy('created_at', 'desc')->paginate(4);
		}
		
		else 
		{
			$reviews = [];
		}
		
		$data = array(
			'user' => $user,
			'job' => $job,
			'reviews' => $reviews
		);

		return View::make('users.view_profile')->with($data);
	}

	public function dashboard_helper($id)
	{
		//to show active jobs that helper has been selected for
		$activeJobIds = DB::table('jobs')->join('helpers_jobs_mapping', function($join)
        {
            $join->on('jobs.id', '=', 'helpers_jobs_mapping.job_id')
                 ->where('helpers_jobs_mapping.is_accepted', '=', 1);
        })
        ->lists('id');

    	$activeJobs = [];

        if (!empty($activeJobIds)) {
        	$activeJobs = Job::whereIn('id', $activeJobIds)->get();
        }


        $appliedQuery = Auth::user()->appliedJobs();

        if (!empty($activeJobIds)) {
        	$appliedQuery->whereNotIn('id', $activeJobIds);
        }

        $appliedJobs = $appliedQuery->get();

		//$jobsIds will hold all the ids in the jobs table
		$appliedJobIds = array();

		//search all jobs for current job id
		foreach (Auth::user()->appliedJobs as $job) {
			$appliedJobIds[] = $job->id;
		}


		//do not show jobs that have already been applied to


		$jobQuery = Job::with('creator');

		if (count($activeJobIds) > 0){
			$jobQuery->whereNotIn('id', $activeJobIds);
		}

		if (count($appliedJobIds) > 0) {
			$jobQuery->whereNotIn('id', $appliedJobIds);
		}

		//show all jobs if user has not applied to any
		$jobs = $jobQuery->orderBy('created_at', 'desc')->paginate(4);

		$data = array(
			'jobs' => $jobs,
			'activeJobs' => $activeJobs,
			'appliedJobs' => $appliedJobs
		);

		return View::make('users.show_account')->with($data);
	}

	public function dashboard_creator($id)
	{
		$activeJobIds = DB::table('jobs')->join('helpers_jobs_mapping', function($join)
        {
            $join->on('jobs.id', '=', 'helpers_jobs_mapping.job_id')
                 ->where('helpers_jobs_mapping.is_accepted', '=', 1);
        })
        ->lists('id');

        if (!empty($activeJobIds)) {
        	$activeJobs = Job::whereIn('id', $activeJobIds)->get();
        } else {
        	$activeJobs = [];
        }

		//Ben
		//$query = Job::with('helpers')->get()->helpers()->wherePivot('is_accepted', true);
		//$appliedJobs = $query->get();

		if (Auth::user()->createdJobs()->count() > 0) {
			$query = Auth::user()->createdJobs();

			if (!empty($activeJobIds)) {
				$query->whereNotIn('id', $activeJobIds);
			}

			$jobs = $query->orderBy('created_at', 'desc')->paginate(4);
		} else {
			$jobs = [];
		}
		// $user = User::findOrFail($id);
		$data = array(
			'jobs' => $jobs,
			'activeJobs' => $activeJobs,
			// 'job_count' => $job_count,
			// 'helpers' => $helpers
		);

		return View::make('users.show_account')->with($data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('users.edit')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);
		$rules = User::$rules;
		unset($rules['password']);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			// set flash data
			Session::flash('errorMessage', 'Error: Missing Some Input');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$user = User::find($id);
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->email = Input::get('email');
			$user->birth_date = Input::get('birth_date');
			$user->is_helper = Input::get('is_helper');
			$user->is_admin = Input::has('is_admin');
			$user->street = Input::get('street');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip = Input::get('zip');
			$user->bio = Input::get('bio');
			$user->user_pic_path = Input::get('user_pic_path');
			$user->parent_email = Input::get('parent_email');
			$user->parent_phone = Input::get('parent_phone');
			$user->parent_first_name = Input::get('parent_first_name');
			$user->parent_last_name = Input::get('parent_last_name');
			$user->apt_num = Input::get('apt_num');
			$user->gender = Input::get('gender');
			$user->save();

			if (Input::hasFile('image') && Input::file('image')->isValid()){

				$user->addUploadImage(Input::file('image'));
				$user->save();
			}

			return Redirect::action('UsersController@show', $user->id);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findorfail($id);
		$user->delete();
		Session::flash('successMessage', 'Success: Post Deleted');
		return Redirect::action('UsersController@index');
	}


}
