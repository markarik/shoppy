<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
//    use SoftDeletes;
//
//
//    protected $dates =[
//        'deleted_at'
//    ];

    protected $fillable =[

        'offer','discount','start_time','end_time'

    ];

    public function products()
    {
        return $this->hasOne('App\Product');
    }


    public function getProductAttribute()
    {
        return Product::findOrFail($this->product_id);

    }
}
