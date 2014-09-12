<?php

class JobsController extends \BaseController {

	public function __construct()
    {
        // call base controller constructor
        parent::__construct();

        // run auth filter before all methods on this controller except index
        $this->beforeFilter('auth', array('except' => array('index')));
    } // end __construct

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jobs = Job::with('creator')->orderBy('required_date')->paginate(4);

		if (Input::has('search'))
		{
			$search = Input::get('search');
			$jobs = Job::where('description', 'LIKE', '%' . $search . '%')->paginate(50);
		}
		$data = array(
			'jobs' => $jobs
		);
        return View::make('temp_jobs.index')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('temp_jobs.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Job::$rules);

        if($validator->fails())
        {
            Session::flash('errorMessage', 'Job failed');
            return Redirect::back()->withInput()->withErrors($validator);
        } // if it fails
        else
        {
            $job = new Job();
            $job->category = Input::get('category');
            $job->description = Input::get('description');
            $job->price = Input::get('price');
            $job->is_complete = Input::has('is_complete');
            $job->price = Input::get('price');
            $job->required_date = Input::get('required_date');
            $job->required_time = Input::get('required_time');
            $job->creator()->associate(Auth::user());
            $job->save();
            Session::flash('successMessage', 'Post successfully created');
            return Redirect::action('UsersController@dashboard_creator', Auth::id());
        } //end of else
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$job = Job::findOrFail($id);
        return View::make('temp_jobs.show')->with('job', $job);
	}


	/**
	 * on Post helper will apply to job
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function apply($id)
	{
		// Managing kids applying to jobs
		$job = Job::findOrFail($id);
		Auth::user()->appliedJobs()->attach($job->id, array('is_accepted' => false));
        Session::flash('successMessage', 'Job Application submitted');

        // Email to creator
		$data = array(
				'first_name' => "job creator first name",
				'last_name' => "job creator last creator",
				'job_listing' => "job applied for"
			);

        Mail::send('emails.newapplication', $data, function($message)
			{
	  			$message->to('josueplazamusic@gmail.com', 'New Application')->subject('A helper has applied for your job');
			});

        return Redirect::action('UsersController@dashboard_helper', Auth::id());
	}

	public function completeJob($id)
	{
		$job = Job::findOrFail($id);
		$job->is_complete = 1;
		$job->save();
		Session::flash('successMessage', 'This job has been completed.');
		return Redirect::action('UsersController@dashboard_creator', Auth::id());
	}

	/**
	 * on Post giver will select helper to do job
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function selectHelper($job_id)
	{
		//grandma selects Bill to do the job
		//$billyId;
		$helper_id = Input::get('helper_id');
		$selectedHelper = User::findOrFail($helper_id);
		$job = Job::findOrFail($job_id);

		$job->helpers()->sync(array($helper_id => array('is_accepted' => true)));
        Session::flash('successMessage', 'Helper successfully selected');

        // Email to helper
        $data = array(
				'first_name' => "job creator first name",
				'last_name' => "job creator last creator",
				'job_listing' => "job applied for"
			);

        Mail::send('emails.selecthelper', $data, function($message)
			{
	  			$message->to('josueplazamusic@gmail.com', 'Application Accepted')->subject('You have been selected for a job!');
			});

        return Redirect::action('UsersController@dashboard_creator', Auth::id());
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$job = Job::find($id);
        return View::make('temp_jobs.create-edit')->with('job', $job);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Job::$rules);

        if($validator->fails())
        {
            Session::flash('errorMessage', 'Post failed');
            return Redirect::back()->withInput()->withErrors($validator);
        } // if it fails
        else
        {
            //return $purifier->purify($value);
            $job = Job::findOrFail($id);
            //$post->user_id = Auth::user()->id;
            $job->category = Input::get('category');
            $job->description = Input::get('description');
            $job->price = Input::get('price');
            $job->is_complete = Input::has('is_complete');
            $job->price = Input::get('price');
            $job->required_date = Input::get('required_date');
            $job->required_time = Input::get('required_time');
            $job->user_id = Auth::id();;
            $job->save();
            Session::flash('successMessage', 'Post successfully created');
            return Redirect::action('JobsController@show', $job->id);
        } //end of else
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$job = Job::findorFail($id);
        $job->delete();
        Session::flash('successMessage', 'Job successfully deleted');
        return Redirect::action('UsersController@dashboard_creator', Auth::id());
	}

	public function modal($id) {

		$job = Job::findorFail($id);

		$array = [
			'category' => $job->category,
			'description' => $job->description,
			'price' => $job->price,
			'required_date' => $job->required_date,
			'required_time' => $job->required_time,
			'first_name' => $job->creator->first_name,
			'last_name' => $job->creator->last_name,
			'job_id' => $job->id
		];

		return Response::json($array);
	}

	public function applyModal() {

		// Managing kids applying to jobs
		$id = Input::get('id');

		$job = Job::findOrFail($id);
		Auth::user()->appliedJobs()->attach($job->id, array('is_accepted' => false));

		// Email to creator
		$data = array(
				'first_name' => "job creator first name",
				'last_name' => "job creator last creator",
				'job_listing' => "job applied for"
			);

        Mail::send('emails.newapplication', $data, function($message)
			{
	  			$message->to('josueplazamusic@gmail.com', 'New Application')->subject('A helper has applied for your job');
			});

	    return Response::json(['success' => true]);
	}

	public function selectModal() {

		$helper_id = Input::get('helper_id');
		$selectedHelper = User::findOrFail($helper_id);

		$jobId = Input::get('job_id');
		$job = Job::findOrFail($jobId);

		$job->helpers()->sync(array($helper_id => array('is_accepted' => true)));
        Session::flash('successMessage', 'Helper successfully selected');

        // Email to helper
        $data = array(
			'first_name' => "job creator first name",
			'last_name' => "job creator last creator",
			'job_listing' => "job applied for"
		);

        Mail::send('emails.selecthelper', $data, function($message)
		{
  			$message->to('josueplazamusic@gmail.com', 'Application Accepted')->subject('You have been selected for a job!');
		});

	    return Response::json(['success' => true]);
	}
}
