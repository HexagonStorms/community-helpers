<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	static public $rules = [
		'first_name' => 'required|max:50',
		'last_name' => 'required|max:50',
		'email' => 'required',
		'password' => 'required',
		'birth_date' => 'required',
		'street' => 'required|max:50',
		'city' => 'required',
		'state' => 'required|max:2',
		'zip' => 'required|digits:5',
		'gender'=> 'max:1'
    ];

	protected $hidden = array('password', 'remember_token');

	// public function jobsApplied()
	// {
	//     return $this->hasMany('Job')->withPivot('is_accepted');
	// }

	public function jobs()
	{
	    return $this->hasMany('Job');
	}

	public function setStateAttribute ($value)
	{
		$this->attributes['state'] = strtoupper($value);
	}

	public function setCityAttribute ($value)
	{
		$this->attributes['city'] = ucwords(strtolower($value));
	{
	    return $this->hasMany('Job');
	}
}

