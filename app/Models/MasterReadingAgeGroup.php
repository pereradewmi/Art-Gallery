<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterReadingAgeGroup extends Model
{
    protected $fillable = [
        'reading_age_group',
        'status',
        'created_at',
        'updated_at',
    ];
}
