<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Produto;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venda = Venda::all();
        return view('vendas.index', ['vendas' => $venda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venda = new Venda();
        $venda->fill($request->validate(Venda::$rules));
        $venda->data = date();
        $venda->save();
        foreach (Session::get('itens') as $key => $carrinho )
        {
            $produto = Produto::find($key);
            $item = new Item();
            $item->produto()->associate($produto);
            $item->quantidade = $carrinho['quantidade'];
            $item->preco = $item->quantidade * $produto->preço;
            $venda->items()->save($item);
        }
        $cliente = Cliente::find($request->cliente_id);  
        $venda->cliente()->associate($cliente);
        return redirect()->action([VendaController::class, 'show'], ['venda' => $venda]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {
        return view('vendas.show', ['venda' => $venda]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venda $venda)
    {
        $venda->venda()->delete();
        $venda->delete();
        return redirect()->action([VendaController::class, 'index']);
    }
}
