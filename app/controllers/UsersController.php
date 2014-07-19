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
			$user->is_helper = Input::has('is_helper');
			$user->is_admin = Input::has('is_admin');
			$user->street = Input::get('street');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->bio = Input::get('bio');
			$user->user_pic_path = Input::get('user_pic_path');
			$user->parent_email = Input::get('parent_email');
			$user->parent_phone = Input::get('parent_phone');
			$user->parent_first_name = Input::get('parent_first_name');
			$user->parent_last_name = Input::get('parent_last_name');
			$user->apt_num = Input::get('apt_num');
			$user->gender = Input::get('gender');
			$user->save();

			Auth::loginUsingId($user->id);

			return Redirect::action('UsersController@show', $user->id);
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
		$jobs = Job::with('creator')->orderBy('created_at', 'desc')->paginate(4);
		$user = User::findOrFail($id);
		$data = array(
			'jobs' => $jobs,
			'user' => $user
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
		return View::make('temp_users.edit')->with('user', $user);
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
			$user->is_helper = Input::has('is_helper');
			$user->is_admin = Input::has('is_admin');
			$user->street = Input::get('street');
			$user->city = Input::get('city');
			$user->state = Input::get('state');
			$user->zip = Input::get('zip');
			$user->save();

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
