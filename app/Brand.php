<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable= ['name','category_id'];

    public function categories(){
        return $this->belongsTo(App\Category);
    }

    public function products(){
        return$this->hasMany(App\Product);
    }

    public function getCategoryNameAttribute(){

        $categories = Category::where('id',$this->category_id)->first();
        return $categories->name;

        }
}
