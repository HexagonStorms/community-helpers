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

 //    public function helpers()
	// {
 //    	return $this->belongsToMany('User');
	// }// end of helpers

    public function user()
    {
        return $this->belongsTo('User');
    }// end of helpers


    // public function renderBody()
    // {
    //     $dirtyHTML = Parsedown::instance()->parse($this->description);
    //     $config = HTMLPurifier_Config::createDefault();
    //     $purifier = new HTMLPurifier($config);
    //     return $purifier->purify($dirtyHTML);
    // } //end of renderBody

    // public function canManagePost()
    // {
    //     return Auth::check() && (Auth::user()->is_admin || Auth::user()->id == $this->user_id);
    // }
}