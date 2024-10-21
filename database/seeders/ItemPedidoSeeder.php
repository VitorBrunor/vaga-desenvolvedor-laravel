<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ItemPedido;

class ItemPedidoSeeder extends Seeder
{
    public function run()
    {
        ItemPedido::factory()->count(50)->create(); // Cria 50 itens de pedido
    }
}
