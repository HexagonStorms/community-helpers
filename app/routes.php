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

Route::get('/register', 'HomeController@register');

Route::get('/listings', 'HomeController@listings');

Route::get('/account_dashboard', 'HomeController@account_dashboard');

Route::get('/account_ad_create', 'HomeController@account_ad_create');

Route::get('/terms', 'HomeController@terms');

// Currently Adding

Route::get('/contact', 'HomeController@contact');

Route::get('/account', 'HomeController@account');

Route::get('/account_ads', 'HomeController@account_ads');

Route::get('/account_credits', 'HomeController@account_credits');

Route::get('/account_profile', 'HomeController@account_profile');

Route::get('/details', 'HomeController@details');

Route::get('/my_account', 'HomeController@my_account');


Route::resource('jobs', 'JobsController');
Route::resource('users', 'UsersController');