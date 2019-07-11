<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public  function categories(){
        return $this->belongsTo('App\Category');
    }

    public function brands(){
        return $this->belongsTo(App\Brand);
    }
}
