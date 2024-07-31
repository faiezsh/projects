<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    public $timestamps = false;
    protected $fillable = array('name');

    public function category_key_word()
    {
        return $this->hasMany('keywords');
    }
}
