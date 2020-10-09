<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Exception;
use Illuminate\Support\Facades\Validator;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index', ['vendas' => $vendas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('vendas.create', ['clientes' => $clientes]);
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
        $cliente = Cliente::find($request->cliente_id);  
        $venda->cliente()->associate($cliente);
        $venda->save();
        // foreach ($request->session()->get('itens') as $key => $carrinho )
        // {
        //     $produto = Produto::find($key);
        //     if($produto->quantidade_em_estoque < $carrinho['quantidade']){
        //         throw new Exception('quantidade maior do que em estoque');
        //     }
        // }
        foreach ($request->session()->get('itens') as $key => $carrinho )
        {
            $produto = Produto::find($key);
            $item = new Item();
            $item->quantidade = $carrinho['quantidade'];
            $item->produto()->associate($produto);
            // $rules = Item::$rules;
            // $rules['quantidade'] = 'required|max:' . $produto->quantidade_em_estoque;
            $validator = Validator::make(
                $item->toArray(),
                ['quantidade' => 'required|max:'.$produto->quantidade_em_estoque]
            );
            if ($validator->fails()) {
                return redirect('vendas/create')
                    ->withErrors($validator)
                    ->withInput();
            }
            $produto->quantidade_em_estoque -= $carrinho['quantidade'];
            $produto->save();
            $item->preco = $item->quantidade * $produto->preço;
            $venda->items()->save($item);
        }
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
