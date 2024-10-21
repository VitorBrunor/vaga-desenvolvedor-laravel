<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelaPedidosCompras extends Migration
{
    public function up()
    {
        Schema::create('pedidos_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes')->onDelete('cascade');
            $table->enum('status', ['Em Aberto', 'Pago', 'Cancelado']);
            $table->date('data_pedido');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos_compras');
    }
}
