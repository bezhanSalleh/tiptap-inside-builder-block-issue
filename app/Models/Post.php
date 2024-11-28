<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'blocks',
    ];

    protected $casts = [
        'content' => 'array',
        'blocks' => 'array',
    ];
}
