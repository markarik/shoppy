<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name'];

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public function getParentAttribute()
    {


        $parent = Category::where('id', $this->parent_id)->first();

//            dd($parent->id);

        return $parent->name;

    }

    public function ProductDetailAttribute()
    {

        $categories = [];
        array_push($categories, Category::where('parent_id', $this->id)->get());

        dd($categories);


return $categories;
    }




//    public function parent()
//    {
//        return $this->belongsTo(App\Category, 'parent_id');
//    }
//
//    public function children()
//    {
//        return $this->hasMany(App\Category, 'parent_id');
//    }
//
//
//    public function childrenRecursive()
//    {
//        return $this->children()->with('childrenRecursive');
//    }
// public function sub_category()
// {
//     return $this->belongsTo(self::class, 'parent_id', 'id');
// }
//
//    public function parent_category()
//    {
//        return $this->hasMany(self::class, 'id', 'parent_id');
//    }


//    public function parent()
//    {
//        return $this->belongsTo(self::class, 'parent_id');
//    }
//
//    public function children()
//    {
//        return $this->hasMany(self::class, 'parent_id');
//    }


    public function subcategory()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }


//    public function getBrandAttribute(){
//
//
//$brand = Brand::where('category_id',)
//        return $parent->name;
//
//    }

}
