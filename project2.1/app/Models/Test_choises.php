<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test_choises extends Model 
{

    protected $table = 'test_choises';
    public $timestamps = false;
    protected $fillable = array('testid', 'test_answer_id');

    public function test_choice_test()
    {
        return $this->belongsTo('Tests', 'testid');
    }

    public function test_choice_test_answer()
    {
        return $this->belongsTo('Test_answers', 'test_answer_id');
    }

}