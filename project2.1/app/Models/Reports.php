<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model 
{

    protected $table = 'reports';
    public $timestamps = false;
    protected $fillable = array('course_id', 'chat_id', 'global_chat_id', 'state', 'time');

    public function report_cource()
    {
        return $this->belongsTo('Courses', 'course_id');
    }

    public function report_chat()
    {
        return $this->belongsTo('Chat', 'chat_id');
    }

    public function report_global_chat()
    {
        return $this->belongsTo('Global_chat', 'global_chat_id');
    }

}