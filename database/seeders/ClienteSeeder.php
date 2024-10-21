<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        Cliente::factory()->count(10)->create(); // Cria 10 registros de clientes
    }
}
