<?php

namespace Database\Factories;

use App\Models\ItemPedido;
use App\Models\Produtos;
use App\Models\PedidoCompra;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemPedidoFactory extends Factory
{
    protected $model = ItemPedido::class;

    public function definition()
    {
        return [
            'pedido_id' => PedidoCompra::factory(), // cria um pedido automaticamente
            'produto_id' => Produtos::factory(), // cria um produto automaticamente
            'quantidade' => $this->faker->numberBetween(1, 10),
            'preco' => $this->faker->randomFloat(2, 10, 100), // preço entre 10 e 100
        ];
    }
}
