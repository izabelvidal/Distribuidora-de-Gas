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
        $venda->fill($request->validate(venda::$rules));
        $venda->save();
        $produto = Produto::find($request->produto_id);
        $cliente = Cliente::find($request->cliente_id);  
        $item = new Item();
        $item->produto()->associate($produto);
        $item-> quantidade = $request->quantidade;
        $item->preco = $item->quantidade * $produto->preço;
        $venda->items()->save($item);
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
        return view('vendas.show', ['vendas' => $venda]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $venda)
    {
        return view('vendas.edit', ['venda' => $venda]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $venda)
    {
        $venda->fill($request->validate(Venda::$rules));
        $venda->save();
        return redirect()->action([VendaController::class, 'show'], ['Venda' => $venda->refresh()]);
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
