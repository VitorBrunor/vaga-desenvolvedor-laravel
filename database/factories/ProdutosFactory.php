<?php

namespace Database\Factories;

// database/factories/ProductFactory.php
use App\Models\Produtos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosFactory extends Factory
{
    protected $model = Produtos::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'descricao' => $this->faker->sentence,
            'preco' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
