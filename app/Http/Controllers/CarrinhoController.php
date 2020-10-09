<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarrinhoController extends Controller
{
    public function adicionar(Request $request)
    {
        if ($request->session()->has('itens')) $carrinho = $request->session()->get('itens');
        else $carrinho = array();
        $id = $request->produto_id;
        $produto = Produto::find($id);
        if (array_key_exists($id, $carrinho)) {
            $carrinho[$id]['quantidade'] += $request->quantidade;
            $carrinho[$id]['subtotal'] = $produto->preco * $request->quantidade;
            Validator::make(
                ['quantidade' => $carrinho[$id]['quantidade']],
                ['quantidade' => "required|numeric|max:" . $produto->quantidade_em_estoque,]
            )->validate();
        } else {
            $dados = array();
            $dados['quantidade'] = $request->quantidade;
            $dados['preco'] = $produto->preco;
            $dados['produto'] = $produto->nome;
            $dados['subtotal'] = $produto->preco * $request->quantidade;
            $carrinho[$id] = $dados;
            Validator::make(
                ['quantidade' => $dados['quantidade']],
                ['quantidade' => "required|numeric|max:" . $produto->quantidade_em_estoque,]
            )->validate();
        }
        $request->session()->put('itens', $carrinho);
        return view('carrinho');
    }

    public function remover(Request $request, $produto_id)
    {
        if ($request->session()->has('itens')) {
            $carrinho = $request->session()->get('itens');
        }
        if (array_key_exists($produto_id, $carrinho)) {
            unset($carrinho[$produto_id]);
        }
        $request->session()->put('itens', $carrinho);
        return view('carrinho');
    }
}
