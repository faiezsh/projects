<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{

    protected $table = 'tests';
    public $timestamps = false;
    protected $fillable = array('question', 'next_question_id');

    public function test_keyword()
    {
        return $this->hasMany('Keywords');
    }

    public function test_test_choice()
    {
        return $this->hasMany('Test_choises');
    }
}
