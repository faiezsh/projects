<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model 
{

    protected $table = 'chat';
    public $timestamps = false;
    protected $fillable = array('student_id', 'teacher_id', 'content', 'category', 'state', 'time');

    public function chat_user_st()
    {
        return $this->belongsTo('Users', 'student_id');
    }

    public function chat_user_te()
    {
        return $this->belongsTo('Users', 'teacher_id');
    }

    public function chat_chat_obj()
    {
        return $this->hasMany('Chat_obj');
    }

    public function chat_report()
    {
        return $this->hasMany('Reports');
    }

}