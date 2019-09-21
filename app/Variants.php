<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function PHPSTORM_META\type;

class Variants extends Model
{
    protected $fillable = [
            'type'
        ];

    public function getVariantOptionAttribute()
    {

        $option = VariantOption::where('variant_id',$this->id)->get();

        return $option;

    }


}
