<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_media_link',
        'social_media_icon_small',
        'social_media_icon_big',
        'social_media_name',
       
    ];

}
