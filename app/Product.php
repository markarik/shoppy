<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;


    protected $dates =[
      'deleted_at'
    ];


    protected $fillable=[
        'name',
        'unit_cost',
        'short_description',
        'long_description',
        'featured_image_url',
//        'brand_id',
        'status'
    ];
    public  function categories(){
        return $this->belongsTo('App\Category');
    }

    public function brands(){
        return $this->belongsTo(App\Brand);
    }

    public function getBrandNameAttribute()
    {

        $brand = Brand::where('id',$this->brand_id)->first();

        return $brand->name;

    }
}
