<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'image',        
    ];

    public function category(){
        return $this->belongsTo(App\Models\Category::class,'category_id');
    }

    public function productAttribute(){
        return $this->hasMany(App\Models\ProductAttribute::class);
    }

    public function imageGallery(){
        return $this->hasMany(App\Models\ImageGallery::class);
    }
}
