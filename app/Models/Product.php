<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductType;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo(ProductType::class, 'type_id', 'id');
    }

    public function productImage(){
        return $this->hasOne(ProductImage::class, 'product_id', 'id');
    }

    public function subProductImage(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
