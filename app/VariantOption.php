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
}
