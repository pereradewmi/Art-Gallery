<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $fillable = [
        'customer_id',
        'first_name',
        'last_name',
        'email',
        'password',
        'contact_no',
        'billing_address',
        'shipping_address',
        'status',
        'created_at',
        'updated_at',
    ];

    public function city()
    {
        return $this->belongsTo('App\Models\City', 'shipping_address_city_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'shipping_address_country_id', 'id');
    }

    public function billingCity()
    {
        return $this->belongsTo('App\Models\City', 'billing_address_city_id', 'id');
    }

    public function billingCountry()
    {
        return $this->belongsTo('App\Models\Country', 'billing_address_country_id', 'id');
    }

}