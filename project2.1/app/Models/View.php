<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class View extends Model 
{

    protected $table = 'view';
    public $timestamps = false;
    protected $fillable = array('userid', 'course_id', 'opinion');

    public function view_user()
    {
        return $this->belongsTo('Users', 'userid');
    }

    public function view_course()
    {
        return $this->belongsTo('Courses', 'course_id');
    }

}