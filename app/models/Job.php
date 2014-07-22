<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Job extends Eloquent {

	// the db table this model realtes to
    protected $table = 'jobs';

    // validation rules for our model properties
    static public $rules = [
    	'category' => 'required|max:50',
    	'description' => 'required|max:100',
        'price' => 'required|numeric',
        'required_date' => 'required',
        'required_time' => 'required',
    ];

    public function helpers()
    {
        return $this->belongsToMany('User', 'helpers_jobs_mapping')->withPivot('is_accepted');
    }

    public function creator() {
        return $this->belongsTo('User', 'user_id');
    }

    public function review()
    {
        return $this->hasMany('Review');
    }
}