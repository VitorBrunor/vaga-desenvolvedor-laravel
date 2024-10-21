<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;

    protected $table = 'itens_pedido'; // Nome da tabela

    protected $fillable = [
        'pedido_id',
        'produto_id',
        'quantidade',
        'preco',
    ];

    // Relação com o modelo Pedido
    public function pedido()
    {
        return $this->belongsTo(PedidoCompra::class);
    }

    // Relação com o modelo Produto
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
