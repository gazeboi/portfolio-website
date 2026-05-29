<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'detail',
        'image', 'live_demo', 'github_url',
        'tags', 'category'
    ];

    protected $casts = [
        'tags' => 'array'
    ];
}