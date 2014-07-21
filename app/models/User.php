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

    function makeThumbnails($updir, $img, $id,$MaxWe=300,$MaxHe=300)
    {
        $arr_image_details = getimagesize($img); 
        $width = $arr_image_details[0];
        $height = $arr_image_details[1];

        $percent = 100;
        if($width > $MaxWe) $percent = floor(($MaxWe * 100) / $width);

        if(floor(($height * $percent)/100)>$MaxHe)  
        $percent = (($MaxHe * 100) / $height);

        if($width > $height) {
            $newWidth=$MaxWe;
            $newHeight=round(($height*$percent)/100);
        }else{
            $newWidth=round(($width*$percent)/100);
            $newHeight=$MaxHe;
        }

        if ($arr_image_details[2] == 1) {
            $imgt = "ImageGIF";
            $imgcreatefrom = "ImageCreateFromGIF";
        }
        if ($arr_image_details[2] == 2) {
            $imgt = "ImageJPEG";
            $imgcreatefrom = "ImageCreateFromJPEG";
        }
        if ($arr_image_details[2] == 3) {
            $imgt = "ImagePNG";
            $imgcreatefrom = "ImageCreateFromPNG";
        }


        if ($imgt) {
            $old_image = $imgcreatefrom($img);
            $new_image = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresized($new_image, $old_image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            $imgt($new_image, $updir."/".$id."_profile.jpg");

            return "/".$updir."/".$id."_profile.jpg";
        }
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