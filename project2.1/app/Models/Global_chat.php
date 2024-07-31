<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Global_chat extends Model 
{

    protected $table = 'global_chat';
    public $timestamps = false;
    protected $fillable = array('userid', 'content', 'category', 'time');

    public function global_chat_global_chat_gatogry()
    {
        return $this->hasMany('Global_chat_catagory');
    }

    public function global_chat_user()
    {
        return $this->belongsTo('Users', 'userid');
    }

    public function global_chat_coment()
    {
        return $this->hasMany('Comments');
    }

    public function global_chat_report()
    {
        return $this->hasMany('Reports');
    }

}