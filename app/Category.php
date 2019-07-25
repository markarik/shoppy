<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable =['name'];

    public  function brands(){
        return $this->hasMany(App\Brand);
    }

    public function getParentAttribute(){


            $parent = Category::where('id',$this->parent_id)->first();

        return $parent->name;

    }
}
