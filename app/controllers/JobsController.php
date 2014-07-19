<?php

class JobsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jobs = Job::with('creator')->orderBy('required_date')->paginate(4);
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
            Session::flash('errorMessage', 'Post failed');
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
            return Redirect::action('JobsController@index');
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
            $job->user_id = 1;
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
        // if ($post->canManagePost() )
        // {
		//$job->users()->detach($id);

		//$job->review->each(function($review_model) {
		//	$review_model->delete();
		//});

		//$job->detach($id);
        $job->delete();
        Session::flash('successMessage', 'Post successfully deleted');
        return Redirect::action('JobsController@index');
        //}
        //else
        //{
            //Session::flash('errorMessage', 'Access Denied');
            //return Redirect::action('PostsController@index');
        //}
	}


}
