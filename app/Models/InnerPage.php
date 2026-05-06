<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnerPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'photo', 'seo_title', 'seo_meta_description', 'status'
    ];
}

