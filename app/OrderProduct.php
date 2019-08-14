<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderProduct extends Model
{
    protected $fillable = [
        'quantity',
        'amount',
        'customRadioInline1'
    ];

    public function getProductAttribute()
    {
        return Product::find($this->product_id);

    }

    public function getOptionsAttribute()
    {
        $order_variant_option = OrderVariantOption::where('orderproduct_id', $this->id)->get();

        return $order_variant_option;
    }

    public function getOptionNameAttribute()
    {

        $order_variant_options = $this->getOptionsAttribute();

        $option_names = [];

        if ($order_variant_options != null) {
            foreach ($order_variant_options as $option) {
                array_push($option_names, VariantOption::where('id', $option->variant_option_id)->first());
            }
        }

//        dd($option_names);

        return $option_names;

    }

    public function getOptionNameCounterAttribute()
    {
        $order_variant_options = $this->getOptionsAttribute();

        $option_names = [];

        if ($order_variant_options != null) {
            foreach ($order_variant_options as $option) {
                array_push($option_names, VariantOption::where('id', $option->variant_option_id)->first());
            }
        }

        return count($option_names);
    }


    public function getProductNameAttribute()
    {

        $product = Product::where('id', $this->product_id)->first();

        //$product = Product::where('id',$this->product_id )->where('deleted_at', null)->first();

        return $product->name;
//        if($product = Product::where('id',$this->product_id )->first() && $product = Product::where('deleted_at','==',))
    }

    public function getUserNameAttribute()
    {

        $user = User::where('id', $this->users_id)->first();

        return $user->f_name;
    }


}
