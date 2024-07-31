<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test_answers extends Model
{

    protected $table = 'test_answers';
    public $timestamps = false;
    protected $fillable = array('description', 'correct');

    public function test_answer_test_choice()
    {
        return $this->hasMany('Test_choises');
    }
}
