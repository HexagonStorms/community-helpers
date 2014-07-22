<?php

class ReviewsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$reviews = Review::with('job')->get();
		$data = array(
			'reviews' => $reviews
		);
        return View::make('temp_reviews.index')->with($data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('temp_reviews.create-edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Review::$rules);

        if($validator->fails())
        {
            Session::flash('errorMessage', 'Review failed');
            return Redirect::back()->withInput()->withErrors($validator);
        } // if it fails
        else
        {
            $review = new Review();
            $review->job_id = Input::get('job_id');
            $review->rating = Input::get('rating');
            $review->comment = Input::get('comment');
            $review->save();
            Session::flash('successMessage', 'Post successfully created');
            return Redirect::action('ReviewsController@index');
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
		//$id=job_id;
		$jobs = Job::with('creator')->get();
		$review = Review::with('job')->findorFail($id);
		$data = array(
			'jobs' => $jobs,
			'review' => $review
		);
        return View::make('temp_reviews.show')->with($data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$review = Job::with('review')->find($id);
        return View::make('temp_reviews.create-edit')->with('review', $review);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Review::$rules);

        if($validator->fails())
        {
            Session::flash('errorMessage', 'Post failed');
            return Redirect::back()->withInput()->withErrors($validator);
        } // if it fails
        else
        {
            //return $purifier->purify($value);
            $job = Job::findOrFail($id);
            $review = new Review();
            $review->job_id = Input::get('job_id');
            $review->rating = Input::get('rating');
            $review->comment = Input::get('comment');
            $review->save();
            Session::flash('successMessage', 'Post successfully created');
            return Redirect::action('ReviewsController@show', $review->id);
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
		$review = Review::findorFail($id);
        // if ($post->canManagePost() )
        // {
		//$job->users()->detach($id);

		//$job->review->each(function($review_model) {
		//	$review_model->delete();
		//});

		//$job->detach($id);
        $review->delete();
        Session::flash('successMessage', 'Post successfully deleted');
        return Redirect::action('ReviewsController@index');
	}


}
