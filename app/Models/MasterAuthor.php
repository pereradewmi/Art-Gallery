<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterAuthor extends Model
{
    protected $fillable = [
        'author_name',
        'status',
        'created_at',
        'updated_at',
    ];
}