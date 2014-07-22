<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function home()
	{
		return View::make('pages.home');
	}

	public function search()
	{
		$jobs = Job::with('creator')->orderBy('created_at', 'desc')->paginate(10);
		$data = array(
			'jobs' => $jobs,
			// 'user' => $user,
			// 'jobsApplied' => $jobsApplied
		);

		return View::make('pages.search')->with($data);
	}
	public function register()
	{
		return View::make('pages.register');
	}

	public function listings()
	{
		return View::make('pages.listings');
	}

	public function account_dashboard()
	{
		return View::make('pages.account_dashboard');
	}

	public function account_dashboard_helper()
	{
		return View::make('pages.account_dashboard_helper');
	}

	public function account_ad_create()
	{
		return View::make('pages.account_ad_create');
	}

	public function terms()
	{
		return View::make('pages.terms');
	}

	public function contact()
	{
		return View::make('pages.contact');
	}

	public function account_settings()
	{
		return View::make('pages.account_settings');
	}

	public function account_ads()
	{
		return View::make('pages.account_ads');
	}

	public function account_credits()
	{
		return View::make('pages.account_credits');
	}

	public function account_profile()
	{
		return View::make('pages.account_profile');
	}

	public function details()
	{
		return View::make('pages.details');
	}

	public function my_account()
	{
		return View::make('pages.my_account');
	}

	// ==============LogIn Controls==============//

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if(Auth::attempt(array('email' => $email, 'password' => $password)))

		{
			if (Auth::user()->is_helper == TRUE)
			{
				return Redirect::intended(action('UsersController@dashboard_helper', auth::user()->id));
			}
			elseif (Auth::user()->is_helper== FALSE)
			{
				return Redirect::intended(action('UsersController@dashboard_creator', auth::user()->id));
			}
		} else
		{
			Session::flash('errorMessage', 'Email or Password not found.');
			return Redirect::action('HomeController@showLogin')->withInput();
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::action('HomeController@home');
	}

	public function users()
	{
		return View::make('temp_users.users');
	}
}
