<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Chama as seeders que correspondem às tabelas migradas
        $this->call([
            ClienteSeeder::class,     
            ProdutoSeeder::class,      
            PedidoSeeder::class,       
            EnderecoSeeder::class,  
            ItemPedidoSeeder::class, 
        ]);
    }
}
