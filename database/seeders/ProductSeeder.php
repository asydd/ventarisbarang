<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            "name" => "produk 1",
            "description" => "Deskripsi Produk",
            "sku" => "12345-ok",
            "price" => 10000,
            "stock" => 100,
            "category_id" => 1,
        ]);
    }
}
