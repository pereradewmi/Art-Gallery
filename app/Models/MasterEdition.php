<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterEdition extends Model
{
    protected $fillable = [
        'edition',
        'status',
        'created_at',
        'updated_at',
    ];
}