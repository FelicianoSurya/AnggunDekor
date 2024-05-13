<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PortfolioType;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    protected $fillable = [
        'name',
        'image_path',
        'type_id'
    ];

    public function type(){
        return $this->belongsTo(PortfolioType::class, 'type_id', 'id');
    }
}
