<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterCourierCityCharge extends Model
{
    protected $fillable = [
        'created_at',
        'updated_at',
    ];

    public function courier()
    {
        return $this->belongsTo('App\Models\MasterCourier', 'courier_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id', 'id');
    }


}
