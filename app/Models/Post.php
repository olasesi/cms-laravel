<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'discussion',
        'post_category',
        'body',
        'image',
        'video',
        'publish_time',
        'visibility',
        'order',
        'author',
        'recent',
        'breaking_news',
        'most_popular',
        'favourite',
        'hot_topics',
        'watch_now',
        'trending',
        'more_news',
    ];

   

}
