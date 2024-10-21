<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoCompra extends Model
{
    use HasFactory;

    protected $table = 'pedidos_compras'; // Nome da tabela no banco de dados

    protected $fillable = [
        'cliente_id',
        'status',
        'data_pedido',
    ];

    // Defina a relação com o modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
