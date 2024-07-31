<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keywords extends Model
{

    protected $table = 'keywords';
    public $timestamps = false;
    protected $fillable = array('formal', 'word', 'testid', 'categoryid');

    public function key_word_category()
    {
        return $this->belongsTo('categories');
    }

    public function keyword_courceword()
    {
        return $this->hasMany('Course_word');
    }

    public function keyword_test()
    {
        return $this->belongsTo('Tests', 'testid');
    }
}
