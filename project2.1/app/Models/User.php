<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
//use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = array('name', 'password', 'email', 'roll', 'age', 'rate', 'state', 'statetime');

    public function get_id()
    {
        return $this->id;
    }

    public function user_certificate()
    {
        return $this->hasMany(Certificate::class);
    }

    public function user_view()
    {
        return $this->hasMany('View');
    }

    public function user_chat_st()
    {
        return $this->hasMany('Chat');
    }

    public function user_chat_te()
    {
        return $this->hasMany('Chat');
    }

    public function user_global_chat()
    {
        return $this->hasMany('Global_chat');
    }

    public function user_course()
    {
        return $this->hasMany('Courses');
    }

    public function user_comment()
    {
        return $this->hasMany('Comments');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
