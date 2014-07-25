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

    protected $imgDir = 'img/img-upload';

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


    public function addUploadImage($image)
    {

        $systemPath = public_path() . '/' . $this->imgDir . '/';

        $imageName = $this->id . '-' . $image->getClientOriginalName();

        $image->move($systemPath, $imageName);

        $maxHeight = 100;
        $maxWidth = 100;

           $newHeight = 0;
           $newWidth = 0;

           $inputFile = public_path() . "/img/img-upload/{$imageName}";

           $newImageName = substr($imageName, 0, strlen($imageName)-4) . "-small.jpg";

           $outputFile = public_path() . "/img/img-upload/{$newImageName}";

           // load the image to be manipulated
           $image = new Imagick($inputFile);

           // get the current image dimensions
           $currentWidth = $image->getImageWidth(); 
           $currentHeight = $image->getImageHeight();

           // determine what the new height and width should be based on the type of photo
           if ($currentWidth > $currentHeight)
           {
               // landscape photo
               // width should be resized to max and height should be resized proportionally
               $newWidth = $maxWidth;
               $newHeight = ceil($currentHeight * ($newWidth / $currentWidth));
           }
           else if ($currentHeight > $currentWidth)
           {
               // portrait photo
               // height should be resized to max and width should be resized proportionally
               $newHeight = $maxHeight;
               $newWidth = ceil($currentWidth * ($newHeight / $currentHeight));
           }
           else
           {
               // square photo
               // resize image to max dimensions
               $newHeight = $newWidth = $maxHeight;
           }

           // perform the image resize
           $image->resizeImage($newWidth, $newHeight, Imagick::FILTER_LANCZOS, true);  

           // write out the new image
           $image->writeImage($outputFile);

           // clear memory resources
           $image->clear(); 
           $image->destroy();

        $this->user_pic_path = '/' . $this->imgDir . '/' . $newImageName;
    }

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

  public function appliedJobsIds()
  {
    $activeJobIds = DB::table('jobs')->join('helpers_jobs_mapping', function($join)
    {
        $join->on('jobs.id', '=', 'helpers_jobs_mapping.job_id')
             ->where ('jobs.user_id', '=', Auth::user()->id);
    })
    ->lists('id');
    return $activeJobIds;
  }


	public function setStateAttribute ($value)
	{
		$this->attributes['state'] = strtoupper($value);
	}

	public function setCityAttribute ($value)
	{
		$this->attributes['city'] = ucwords(strtolower($value));
	}

	public function setFirst_nameAttribute ($value)
	{
		$this->attributes['first_name'] = ucwords(strtolower($value));
	}

	public function setLast_nameAttribute ($value)
	{
		$this->attributes['last_name'] = ucwords(strtolower($value));
	}
}