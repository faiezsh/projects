<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course_word extends Model 
{

    protected $table = 'course_word';
    public $timestamps = false;
    protected $fillable = array('course_id', 'keyword_id');

    public function coursword_cours()
    {
        return $this->belongsTo('Courses', 'course_id');
    }

    public function coursword_keyword()
    {
        return $this->belongsTo('Keywords', 'keyword_id');
    }

}