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


    public function getProductDetailAttribute()
    {


        $product_brands = [];

       array_push($product_brands,Product::where('brand_id',$this->id)->get());


//       dd($product_brands);

for ($i = 0 ; $i<count($product_brands); $i++) {
    foreach ($product_brands[$i] as $product) {


//            dd($product);


        return $product;

    }
}


    }



    public function getBrandNameAttribute()
    {

        $brandname = Brand::where('id',$this->brand_id)->first();
        return $brandname;

    }



}
