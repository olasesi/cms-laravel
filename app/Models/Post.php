<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'slug',
        'excerpt',
        'discussion',
        'section_id',
        'body',
        'tags',
        'image',
        'image_path',
        'video_path',
       'approve',
        'publish_time',
        'visibility',
        'pending_preview',
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

    public function comments()
    {
        return $this->belongsToMany('App\Models\Comment', 'comment_post', 'post_id', 'comment_id')->withTimestamps();
    }

}
