<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{

    protected $table = 'certificates';
    public $timestamps = false;
    protected $fillable = array('userid', 'word');

    public function certificate_user()
    {
        return $this->hasOne(User::class);
    }
}
