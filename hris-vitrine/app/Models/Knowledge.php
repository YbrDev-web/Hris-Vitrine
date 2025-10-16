<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'average_rating',
        'rating_count'
    ];
}
