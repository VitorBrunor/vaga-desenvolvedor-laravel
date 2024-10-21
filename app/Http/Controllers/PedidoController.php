<?php

namespace App\Http\Controllers;

use App\Models\PedidoCompra;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = PedidoCompra::with('cliente')->paginate(20);
        return view('pedidos.index', compact('pedidos'));
    }

    public function create()
    {
        return view('pedidos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'status' => 'required|string',
            'data_pedido' => 'required|date',
        ]);

        PedidoCompra::create($request->all());
        return redirect()->route('pedidos.index')->with('success', 'Pedido criado com sucesso.');
    }

    public function edit(PedidoCompra $pedido)
    {
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, PedidoCompra $pedido)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'status' => 'required|string',
            'data_pedido' => 'required|date',
        ]);

        $pedido->update($request->all());
        return redirect()->route('pedidos.index')->with('success', 'Pedido atualizado com sucesso.');
    }

    public function destroy(PedidoCompra $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido deletado com sucesso.');
    }
}
