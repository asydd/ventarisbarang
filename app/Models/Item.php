<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'supplier_id',
        'stock',
        'unit',
        'purchase_price',
        'selling_price',
    ];

    public function category()
{
    return $this->belongsTo(Category::class, 'category_id', 'id');
}

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
