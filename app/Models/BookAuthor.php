<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    protected $fillable = [
        'book_id',
        'author_id',
        'created_at',
        'updated_at',
    ];

    public function author()
    {
        return $this->belongsTo('App\Models\MasterAuthor', 'author_id', 'id');
    }
}