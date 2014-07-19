<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');

Route::get('/search', 'HomeController@search');

Route::get('/register', 'HomeController@register');

Route::get('/listings', 'HomeController@listings');

Route::get('/account_dashboard', 'HomeController@account_dashboard');

Route::get('/account_dashboard_helper', 'HomeController@account_dashboard_helper');

Route::get('/terms', 'HomeController@terms');

Route::get('/contact', 'HomeController@contact');

Route::get('/temp_users/users', 'HomeController@users');

Route::get('/account', function()
{
    return Redirect::action('HomeController@account_settings');
});

Route::get('/account_settings', 'HomeController@account_settings');

Route::get('/account_profile', 'HomeController@account_profile');

Route::get('/details', 'HomeController@details');

Route::get('/my_account', 'HomeController@my_account');

Route::resource('jobs', 'JobsController');

Route::get('users/dashboard/{id}', 'UsersController@dashboard');

Route::resource('users', 'UsersController');

Route::resource('reviews', 'ReviewsController');

Route::get('/login', 'HomeController@showLogin');

Route::post('/login', 'HomeController@doLogin');

Route::get('/logout', 'HomeController@doLogout');
