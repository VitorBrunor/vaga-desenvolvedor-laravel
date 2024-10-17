<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name, // Gera um nome aleatório
            'email' => $this->faker->unique()->safeEmail, // Gera um email único
            'telefone' => $this->faker->phoneNumber, // Gera um número de telefone
        ];
    }
}
