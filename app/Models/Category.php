<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category'; // custom table name

    protected $fillable = [
        'name',
        'slug'
    ];

    // Satu kategori memiliki banyak produk
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'id');
    }

    // Satu kategori memiliki banyak item
    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
