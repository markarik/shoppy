<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;


    protected $dates =[
      'deleted_at'
    ];


    protected $fillable=[
        'name',
        'unit_cost',
        'short_description',
        'long_description',
        'featured_image_url',
//        'brand_id',
        'status'
    ];

    const STATUS_FEATURED = 2;
    const STATUS_NORMAL = 1;


    const STATUSES = [
        self::STATUS_FEATURED => "Featured",
        self::STATUS_NORMAL => "Normal",
    ];

    public  function categories(){
        return $this->belongsTo('App\Category');
    }

    public function brands(){
        return $this->belongsTo(App\Brand);
    }

    public function wishlist()
    {
        return $this->hasMany(WishList::class);
    }

    public function getBrandNameAttribute()
    {

        $brand = Brand::where('id',$this->brand_id)->first();

        return $brand->name;

    }

    public function getStatusTextAttribute() {
        return self::STATUSES[$this->status];
    }

    public function getUndeliveredOrdersAttribute()
    {

        $order_products = OrderProduct::where('product_id',$this->id)->get();

        $payments=[];
        if (count($order_products) != 0){
            foreach ($order_products as $order_product){
                array_push($payments,Payment::where('checkout_id',$order_product->checkout_id)->get());
            }
        }

//        dd(count($payments));

        $order_deliveries =[];

        if (count($payments) != 0){
            foreach ($payments as $payment){
                array_push($order_deliveries, OrderDelivery::where('payments_id',$payment->get('id'))->first());
            }

        }

        $undelivered_orders = [];

            foreach ($order_deliveries as $order_delivery){

                if ($order_delivery != null){

                    if ($order_delivery->status == 2){
                        array_push($undelivered_orders, $order_delivery);
                    }

                }
            }

        return $undelivered_orders;

    }
}
