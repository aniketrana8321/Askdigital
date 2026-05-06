<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'seo_title', 'seo_meta_description','status'];

    public static function boot()
    {
        parent::boot();

        // Automatically generate slug
        static::creating(function ($category) {
            $category->slug = Str::slug($category->name);
        });

        static::updating(function ($category) {
            $category->slug = Str::slug($category->name);
        });
    }
    
    
    // ServiceCategory.php
public function services() {
    return $this->hasMany(Service::class);
}



}
