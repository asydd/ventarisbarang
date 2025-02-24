<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    
    protected $fillable = [
        "name",
        "descripton",
        "sku",
        "price",
        "stock",
        "category_id",
    ];

    protected $table = 'products';
    // protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
