<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment_category extends Model
{

    protected $table = 'comment_category';
    public $timestamps = false;
    protected $fillable = array('comment_id', 'path','type');

    public function comment_gatory_comment()
    {
        return $this->belongsTo('Comments', 'comment_id');
    }
}
