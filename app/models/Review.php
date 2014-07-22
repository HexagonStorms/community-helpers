<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Review extends Eloquent {

	// the db table this model realtes to
	protected $table = 'reviews';

	// validation rules for our model properties
	static public $rules = [
		'rating' => 'numeric',
		'comment' => 'max:5000',
	];

 //    public function helpers()
	// {
 //    	return $this->belongsToMany('User');
	// }// end of helpers

	public function job()
	{
		// return $this->belongsTo('Job', 'jobs_id');
		return $this->belongsTo('Job');
	}// end of job


	// public function renderBody()
	// {
	//     $dirtyHTML = Parsedown::instance()->parse($this->comment);
	//     $config = HTMLPurifier_Config::createDefault();
	//     $purifier = new HTMLPurifier($config);
	//     return $purifier->purify($dirtyHTML);
	// } //end of renderBody

	// public function canManagePost()
	// {
	//     return Auth::check() && (Auth::user()->is_admin || Auth::user()->id == $this->user_id);
	// }


	// public function users()
	// {
	//     return $this->hasManyThrough('User', 'Job', 'jobs_id', 'user_id');
	// }


}