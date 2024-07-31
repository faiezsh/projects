<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercises extends Model 
{

    protected $table = 'exercises';
    public $timestamps = false;
    protected $fillable = array('course_id', 'question');

    public function exercise_cours()
    {
        return $this->belongsTo('Courses', 'course_id');
    }

    public function exercise_choises()
    {
        return $this->hasMany('Exercises_choice');
    }

}