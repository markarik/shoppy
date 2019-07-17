<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDelivery extends Model
{
    public function getStatusAttribute(){
        $status = OrderDelivery::where('status',1)->first();

        return $this->$status;
    }
}
