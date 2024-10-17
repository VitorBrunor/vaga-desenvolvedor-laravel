<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    protected $model =Pedido::class;

    public function definition()
    {
        return [
            'client_id' => \App\Models\Cliente::factory(), // assume que o cliente é criado automaticamente
            'product_id' => \App\Models\Produto::factory(), // assume que o produto é criado automaticamente
            'status' => $this->faker->randomElement(['Em Aberto', 'Pago', 'Cancelado']),
        ];
    }
}
