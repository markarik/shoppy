<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderProduct extends Model
{
    protected $fillable = [
        'quantity',
        'amount',
        'customRadioInline1'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    public function getProductAttribute()
    {
        return Product::find($this->product_id);

    }

    public function getOptionsAttribute()
    {

        $order_variant_option = OrderVariantOption::where('orderproduct_id', $this->id)->get();
//        $order_variant_option = OrderVariantOption::all();

//        dd($order_variant_option);

        return $order_variant_option;

    }

    public function getOptionNameAttribute()
    {

        $order_variant_options = $this->getOptionsAttribute();

        $option_names = [];

        if ($order_variant_options != null) {
            foreach ($order_variant_options as $option) {
                array_push($option_names, VariantOption::where('id', $option->variant_option_id)->first());
            }
        }

//        dd($option_names);

        return $option_names;

    }

    public function getOptionNameCounterAttribute()
    {
        $order_variant_options = $this->getOptionsAttribute();

        $option_names = [];

        if ($order_variant_options != null) {
            foreach ($order_variant_options as $option) {
                array_push($option_names, VariantOption::where('id', $option->variant_option_id)->first());
            }
        }

        return count($option_names);
    }


    public function getProductNameAttribute()
    {

        $product = Product::where('id', $this->product_id)->first();

        return $product;
    }

    public function getUserNameAttribute()
    {

        $user = User::where('id', $this->user_id)->first();

        return $user->f_name;
    }

    public function getUserAttribute()
    {
        $users = User::where('id', $this->user_id)->first();

//        dd($users);

        return $users;
    }


    public function getUndeliveredOrdersAttribute()
    {

        $checkouts = Checkout::where('id', $this->checkout_id)->get();
        $payments = [];
        if (count($checkouts) != 0) {
            foreach ($checkouts as $checkout) {
                array_push($payments, Payment::where('checkout_id', $checkout->id)->get());
            }
        }
        $undelivered0rders = [];

        if (count($payments) != 0) {
            foreach ($payments as $payment) {
                for ($i = 0; $i < count($payment); $i++) {
                    array_push($undelivered0rders, OrderDelivery::where('payment_id', $payment[$i]->id)->get());
                }
            }
        }

        $order_deliveries = [];

        foreach ($undelivered0rders as $undelivered0rder) {
            if ($undelivered0rder != null) {
                foreach ($undelivered0rder as $delivery) {
                    if ($delivery->seller_delivery_status == "pending") {
                        array_push($order_deliveries, $delivery);
                    }
                }
            }
        }
        return $order_deliveries;
    }

    public function getStoreAttribute()
    {

        $seller = Seller::join('products', 'sellers.id', 'products.seller_id')
            ->select('sellers.*')
            ->where('products.id', '=', $this->product_id)
            ->first();

        return $seller->store_name;

    }


    public function getOrderDeliveryStatusAttribute()
    {

        $payment = Payment::where('checkout_id', $this->checkout_id)->first();

        $order_delivery = OrderDelivery::where('payment_id', $payment->id)->where('seller_delivery_status', 'pending')->first();

        return $order_delivery->seller_delivery_status;

    }

}
