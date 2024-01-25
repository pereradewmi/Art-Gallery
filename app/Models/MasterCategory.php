<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterCategory extends Model
{
       protected $fillable = [
        'category_name',
        'status',
        'created_at',
        'updated_at',
    ];

}
