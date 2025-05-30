<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'quantity',
        'transaction_date',
        'description',
    ];

    protected $table = 'transaksi';

    /**
     * Relasi: Setiap transaksi dimiliki oleh satu user.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id'); // Pastikan menggunakan user_id sebagai foreign key
    }
}
