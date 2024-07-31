<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{

    protected $table = 'courses';
    public $timestamps = false;
    protected $fillable = array('name', 'category', 'userid', 'rate', 'time');

    public function cours_report()
    {
        return $this->hasMany('Reports');
    }

    public function cours_view()
    {
        return $this->hasMany('View');
    }

    public function cours_user()
    {
        return $this->belongsTo('Users', 'userid');
    }

    public function cours_content()
    {
        return $this->hasMany('Contents');
    }

    public function cours_keyword()
    {
        return $this->hasMany('Keywords');
    }

    public function cours_excersize()
    {
        return $this->hasMany('Exercises');
    }
}
