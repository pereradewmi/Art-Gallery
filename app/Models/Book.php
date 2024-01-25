<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;

class Book extends Model
{
    // use Markable;

    protected $fillable = [
        'title',
        'price',
        'category_id',
        'description',
        'language_id',
        'publisher_id',
        'publication_date',
        'edition_id',
        'page_count',
        'reading_age_group_id',
        'length',
        'width',
        'height',
        'weight',
        'isbn_10',
        'isbn_13',
        'cover_image_path',
        'status',
        'created_at',
        'updated_at',
    ];


    protected static $marks = [
        Favorite::class,
    ];


    public function bookAuthor()
    {
        return $this->hasMany('App\Models\BookAuthor', 'book_id', 'id');
    }

    public function bookImage()
    {
        return $this->hasMany('App\Models\BookImage', 'book_id', 'id');
    }

    public function bookCategory()
    {
        return $this->belongsTo('App\Models\MasterCategory', 'category_id', 'id');
    }

    public function bookLanguage()
    {
        return $this->belongsTo('App\Models\MasterLanguage', 'language_id', 'id');
    }

    public function bookPublisher()
    {
        return $this->belongsTo('App\Models\MasterPublisher', 'publisher_id', 'id');
    }

    public function bookEdition()
    {
        return $this->belongsTo('App\Models\MasterEdition', 'edition_id', 'id');
    }

    public function bookReadingAgeGroup()
    {
        return $this->belongsTo('App\Models\MasterReadingAgeGroup', 'reading_age_group_id', 'id');
    }

}
