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
	protected $hidden = array('password', 'remember_token');

	// public function jobsApplied()
	// {
	//     return $this->hasMany('Job')->withPivot('is_accepted');
	// }

	public function reviews()
    {
        return $this->hasManyThrough('Review', 'Job');
    }

    public function jobs()
    {
        return $this->hasMany('Job');
    }
}