<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderVariantOption extends Model
{

    public function getVariantOptionNameAttribute()
    {
        $variant_options = VariantOption::where('id',$this->variant_option_id)->first();

        return $variant_options->name;
    }

}
