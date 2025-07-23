<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;  
     protected $table = 'category';
      protected $fillable = [
  
        'titleRu',
        'titleEn',
        'price',
        'article',
        'descriptionRu',
        'descriptionEn',
        'DeliveryRu',
        'DeliveryEn',
        'informationRu',
        'informationEn',
        'payRu',
        'payEn',
        'image',
        'color',
        'size',
        'images',
        'right1',
        'right2',
       
    ];

    protected $casts = [
     
        'color' => 'array',
        'size' => 'array',
        'images' => 'array',
        'right1' => 'boolean',
        'right2' => 'boolean',
    ];

};
