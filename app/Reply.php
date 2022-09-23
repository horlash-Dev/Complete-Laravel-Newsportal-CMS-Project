<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{   protected $fillable = ["body","username"];
    public function sub_comment()
    {
        return $this->morphTo();
    }

    // public function createdBy()
    // {
    //     return $this->belongsTo(User::class, 'created_by');
    // }

}
