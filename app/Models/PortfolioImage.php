<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfoliol;

class PortfolioImage extends Model
{
    use HasFactory;
    protected $table = 'portfolio_images';

    protected $fillable = [
        'portfolio_id',
        'image_path',
    ];

    public function portfolio(){
        return $this->belongsTo(Portfolio::class, 'product_id', 'id');
    }
}
