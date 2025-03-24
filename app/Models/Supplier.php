<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'address'];

    // Jika ingin menambahkan relasi dengan produk (opsional)
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}