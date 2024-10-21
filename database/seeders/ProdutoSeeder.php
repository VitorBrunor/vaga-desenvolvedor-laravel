<?php

namespace Database\Seeders;

// database/seeders/ProductSeeder.php
use App\Models\Produtos;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        Produtos::factory()->count(20)->create();
    }
}
