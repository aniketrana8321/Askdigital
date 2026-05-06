<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_category_id',  // Added the category ID
        'name', 
        'slug', 
        'short_description', 
        'description', 
        'icon', 
        'phone', 
        'seo_title', 
        'seo_meta_description', 
        'photo', 
        'banner', 
        'pdf',
        'status'
    ];

    // Relationship with ServiceCategory
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }
    
    
    // Service.php
public function subCategories() {
    return $this->hasMany(ServiceSubCategory::class);
}
 public function faqs()
    {
        return $this->hasMany(Faq::class);
    }
}
