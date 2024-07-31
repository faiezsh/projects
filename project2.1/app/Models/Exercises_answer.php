<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercises_answer extends Model
{

    protected $table = 'exercises_answer';
    public $timestamps = false;
    protected $fillable = array('description', 'correct');

    public function exercise_answer_exercise_choises()
    {
        return $this->hasMany('Exercises_choice');
    }
}
