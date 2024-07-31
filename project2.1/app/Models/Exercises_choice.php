<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercises_choice extends Model 
{

    protected $table = 'exercises_choice';
    public $timestamps = false;
    protected $fillable = array('exercises_id', 'answer_id');

    public function exercise_choises_exercise()
    {
        return $this->belongsTo('Exercises', 'exercises_id');
    }

    public function exercise_choises_exercise_ansers()
    {
        return $this->belongsTo('Exercises_answer', 'answer_id');
    }

}