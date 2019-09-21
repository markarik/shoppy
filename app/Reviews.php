<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Reviews extends Model
{
    protected $fillable=[

        'comments',
        'rating'

    ];



    public function user(){
        return $this->hasOne(User::class);
    }




    public function getUserNameAttribute()
    {

        $username = User::where('id',$this->user_id)->first();
        return $username;

    }
}
