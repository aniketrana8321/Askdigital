<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {
    use HasFactory;
  // In Testimonial.php
protected $fillable = ['name', 'designation', 'image', 'linkedin', 'facebook', 'twitter'];

}
