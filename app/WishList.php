<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected  $fillable=['product_id','user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function product()
    {
        return $this ->belongsTo(Product::class);
    }

    public function getProductAttribute(){
        $product = Product::where('id',$this->product_id)->first();
        return $product;
    }
}
