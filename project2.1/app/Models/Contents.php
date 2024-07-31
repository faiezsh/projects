<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model 
{

    protected $table = 'contents';
    public $timestamps = false;
    protected $fillable = array('course_id', 'type', 'path'.'typeFile');

    public function contant_cours()
    {
        return $this->belongsTo('Courses', 'course_id');
    }

}