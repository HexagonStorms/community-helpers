<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Review extends Eloquent {

	// the db table this model realtes to
    protected $table = 'helpers_jobs_mapping';
}