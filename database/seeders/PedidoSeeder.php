<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PedidoCompra;

class PedidoSeeder extends Seeder
{
    public function run()
    {
        PedidoCompra::factory()->count(10)->create(); // Cria 10 pedidos
    }
}
