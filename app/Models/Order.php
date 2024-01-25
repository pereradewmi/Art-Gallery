<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
    public function ordered_books()
    {
        return $this->hasMany('App\Models\OrderedBook', 'order_id');
    }

    public function deliveryMethod()
    {
        return $this->belongsTo('App\Models\MasterCourier', 'delivery_method');
    }
    
    public function paymentDetails()
    {
        return $this->hasOne('App\Models\Payment', 'payhere_order_id', 'payhere_order_id');
    }
}
