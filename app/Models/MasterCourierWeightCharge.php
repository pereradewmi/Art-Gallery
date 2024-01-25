<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterCourierWeightCharge extends Model
{
    protected $fillable = [
        'created_at',
        'updated_at',
    ];

    public function courier()
    {
        return $this->belongsTo('App\Models\MasterCourier', 'courier_id', 'id');
    }

}
