<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariantOptions extends Model
{
    public function getVariantOptionNameAttribute()
    {
        $variant_name = VariantOption::where('id',$this->variant_option_id)->first();

//        dd($variant_name);

        return $variant_name;
    }
}
