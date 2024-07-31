<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat_obj extends Model
{

    protected $table = 'chat_obj';
    public $timestamps = false;
    protected $fillable = array('chat_id', 'path');

    public function chat_obj_chat()
    {
        return $this->belongsTo('Chat', 'chat_id');
    }
}
