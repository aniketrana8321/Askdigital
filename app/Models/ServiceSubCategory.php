<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_category_id',
        'service_id',
        'name',
        'slug',
        'description',
        'seo_title',
        'seo_meta_description',
        'photo',
        'banner',
        'pdf',
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
