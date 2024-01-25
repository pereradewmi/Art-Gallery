<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleOption extends Model
{
    protected $fillable = [];

    public function option()
    {
        // return $this->hasOne(MasterOption::class,'id', 'option_id');
        return $this->hasOne('App\Models\MasterOption', 'id', 'option_id');
    }
}