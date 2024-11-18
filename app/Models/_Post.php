<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class _Post extends Model {
    // protected $table = 'blog_post';
    // protected $primaryKey = 'post_id';
    protected $fillable = [
        'title',
        'author',
        'slug',
        'body',
    ];

    
}