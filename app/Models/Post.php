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
        'category_section_id',
        'body',
        'image',
        'image_path',
        'video_path',
        'video_placeholder',
        'publish_time',
        'visibility',
        'order',
        'user_id',
        'recent',
        'breaking_news',
        'most_popular',
        'favourite',
        'hot_topics',
        'watch_now',
        'trending',
        'more_news',
        'updated_at',
        
    ];

   

}
