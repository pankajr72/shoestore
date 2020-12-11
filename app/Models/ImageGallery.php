<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_id',
        'image',
    ];

    public function product(){
        return $this->belongsTo(App\Models\Product::class,'product_id');
    }
}
