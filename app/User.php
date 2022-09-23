<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Article;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{   use HasRoles;
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','username','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class, 'created_by');
    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class, 'created_by');
    // }
    public function getRouteKeyName()
    {
        return "username";   
    }
    // public function reply()
    // {
    //     return $this->hasMany(Reply::class, 'created_by');
    // }
    public function getUrlAttribute()
    {
       return route('authors', $this->username);
    }

    function getNameAttribute()
    {
        return $this->fullname;
    }
    public function getPicavatarattribute()
    {
        $email = $this->email;
        $size = 50;
        return $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?s=" . $size;
    }
    public function author($user, $data)
    {
        return $user->where("username",$data)->first();
    }

}
