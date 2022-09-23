<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["body","username"];
    public function commentable()
    {
        return $this->morphTo();
    }

    public function reply()
    {
        return $this->morphMany(Reply::class,'sub_comment')->where("status",1);
    }

    // public function createdBy()
    // {
    //     return $this->belongsTo(User::class, 'created_by');
    // }

}
