<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Endereco;

class EnderecoSeeder extends Seeder
{
    public function run()
    {
        Endereco::create([
            'cliente_id' => 1, // Altere conforme necessário
            'rua' => '86234 Dee Ways',
            'cidade' => 'Kittyville',
            'estado' => 'Alabama',
            'cep' => '66741',
        ]);
    }
}
