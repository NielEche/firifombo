<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audios extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'link',
        'date',
        'image_path',
        'content',
    ];
}
