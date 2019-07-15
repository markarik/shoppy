<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = [
        'quantity'
        ];

    public function getProductNameAttribute(){

        $product = Product::where('id',$this->product_id )->first();

        //$product = Product::where('id',$this->product_id )->where('deleted_at', null)->first();

        return $product->name;
//        if($product = Product::where('id',$this->product_id )->first() && $product = Product::where('deleted_at','==',))
    }

    public function getUserNameAttribute(){

        $user = User::where('id',$this->users_id)->first();

        return $user->f_name;
    }
}
