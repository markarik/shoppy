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


    public function offers()
    {
        return $this ->hasOne('App\Offer');
    }

    public function orders()
    {
        return $this->belongsToMany('App\OrderProduct');
    }

    public  function categories(){
        return $this->belongsTo(Category::class);
    }

    public function brands(){
        return $this->belongsTo('App\Brand');
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

    public function getProductAttribute()
    {
        $product = Product::where('id',$this->product_id)->get();
        return $product;

    }





    public function getSellerAttribute()
    {
        $sellers = Seller::where('id',$this->seller_id)->first();

//        dd($sellers);
        return $sellers;
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
                array_push($order_deliveries, OrderDelivery::where('payment_id',$payment->get('id'))->first());
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

    public function getVariantAttribute()
    {

        $product_variant_options = ProductVariantOptions::where('product_id',$this->id)->get();

        $variant_options =[];
        $variants_arr =[];

        if ($product_variant_options != null){
            foreach ($product_variant_options as $p_v_o){
                array_push($variant_options,VariantOption::where('id',$p_v_o->variant_option_id)->first());
            }



            foreach ($variant_options as $v_o){
                array_push($variants_arr, Variants::where('id',$v_o->variant_id)->first());
            }

        }

        $collection = collect($variants_arr);

        $variants = $collection->unique();

        $variants->values()->all();
//        dd($variants);

        return $variants;

    }



}
