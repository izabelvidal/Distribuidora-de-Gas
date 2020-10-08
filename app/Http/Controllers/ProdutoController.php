<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->fill($request->validate(Produto::$rules));
        $produto->save();
        return redirect()->action([ProdutoController::class, 'show'], ['produto' => $produto]);
    }

    /**
     * Display the specified resource.
     *
     * @param Produto $produto
     * @return View
     */
    public function show(Produto $produto)
    {
        return view('produtos.show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Produto $produto
     * @return View
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Produto $produto
     * @return Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Produto $produto
     * @return Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->action([ProdutoController::class, 'index']);
    }
}
