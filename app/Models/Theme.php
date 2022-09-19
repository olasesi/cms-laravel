<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme_name',
        'active',
        'primary_color',
        'secondary_color',
        'tertiary_color',
        'body_color',
        'light_color',
        'dark_color',

    ];
}
