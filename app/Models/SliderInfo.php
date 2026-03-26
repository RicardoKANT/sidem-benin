<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderInfo extends Model
{
    protected $fillable = [
        'subtitle',
        'title',
        'animated_text',
        'description',
        'cta_button_text',
        'secondary_button_text',
        'image',
        'order',
    ];

    public static function latest()
    {
        return static::orderBy('created_at', 'desc')->first() ?? new static();
    }
}
