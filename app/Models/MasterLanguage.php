<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterLanguage extends Model
{
    protected $fillable = [
        'language',
        'status',
        'created_at',
        'updated_at',
    ];
}
