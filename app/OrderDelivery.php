<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDelivery extends Model
{

    const STATUS_PENDING = "pending";
    const STATUS_DELIVERED = "delivered";

    const BUYER_STATUS_UNDELIVERED ="undelivered";
    const BUYER_STATUS_DELIVERED = "delivered";


    public function getStatusAttribute(){
        $status = OrderDelivery::where('status',1)->first();

        return $this->$status;
    }




}
