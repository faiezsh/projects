<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Global_chat_catagory extends Model 
{

    protected $table = 'global_chat_catagory';
    public $timestamps = false;
    protected $fillable = array('global_chat_id', 'path');

    public function global_chat_gatogry_global_chat()
    {
        return $this->belongsTo('Global_chat', 'global_chat_id');
    }

}