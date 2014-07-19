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

	public function reviews()
    {
        return $this->hasManyThrough('Review', 'Job');
    }

    public function createdJobs()
    {
        return $this->hasMany('Job');
    }

    public function appliedJobs()
    {
        return $this->belongsToMany('Job', 'helpers_jobs_mapping')->withPivot('is_accepted');
    }


	public function setStateAttribute ($value)
	{
		$this->attributes['state'] = strtoupper($value);
	}

	public function setCityAttribute ($value)
	{
		$this->attributes['city'] = ucwords(strtolower($value));
	}
}