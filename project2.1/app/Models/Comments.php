<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model 
{

    protected $table = 'comments';
    public $timestamps = false;
    protected $fillable = array('global_chat_id', 'userid', 'category', 'content', 'like_count', 'time');

    public function coment_global_chat()
    {
        return $this->belongsTo('Global_chat', 'global_chat_id');
    }

    public function comment_comment_gatory()
    {
        return $this->hasMany('Comment_category');
    }

    public function comment_user()
    {
        return $this->belongsTo('Users', 'userid');
    }

}