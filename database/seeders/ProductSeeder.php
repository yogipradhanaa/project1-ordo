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
            "name" => "Produk 1",
            "description" => "absdbasdja",
            "kode" => "1234-ok",
            "price" => 10000,
            "stock" => 100,
            "category_id" => 1
        ]);
    }
}
