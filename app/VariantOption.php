<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VariantOption extends Model
{
   //

    public function getVariantAttribute()
    {
        $variant = Variants::where('id',$this->variant_id)->first();

        return $variant;
    }



//    public function getVariantOptionAttribute()
//    {
//        $variant_option = VariantOption::where('id',$this->variant_option_id)->get();
//
//
//        dd($variant_option);
//
//        return $variant_option;
//    }


}
