<?php

namespace Database\Factories;

use App\Models\PedidoCompra;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoCompraFactory extends Factory
{
    protected $model = PedidoCompra::class;

    public function definition()
    {
        return [
            'cliente_id' => Cliente::factory(), // Se você quiser criar um cliente relacionado
            'status' => $this->faker->randomElement(['Em Aberto', 'Pago', 'Cancelado']),
            'data_pedido' => $this->faker->date(),
        ];
    }
}
