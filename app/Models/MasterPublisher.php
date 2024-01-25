<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterPublisher extends Model
{
    protected $fillable = [
        'publisher_name',
        'status',
        'created_at',
        'updated_at',
    ];
}