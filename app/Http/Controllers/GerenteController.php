<?php

namespace App\Http\Controllers;

use App\Models\Gerente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GerenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $gerentes = Gerente::all();
        return view('gerentes.index', ['gerentes' => $gerentes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('gerentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gerente = new Gerente();
        $pessoa = new Pessoa();
        $endereco = new Endereco();
        
        //validações 
        $gerente->fill($request->validate(Gerente::$rules));
        $pessoa->fill($request->validate(Pessoa::$rules));
        $endereco->fill($request->validate(Endereco::$rules));

        $pessoa->save();

        $gerente->pessoa()->associate($pessoa);
        $pessoa->endereco()->save($endereco);
        $gerente->save();

        return redirect()->action([GerenteController::class, 'show'], ['gerente' => $gerente]);
    }

    /**
     * Display the specified resource.
     *
     * @param Gerente $gerente
     * @return View
     */
    public function show(Gerente $gerente)
    {
        return view('gerentes.show', ['gerente' => $gerente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Gerente $gerente
     * @return View
     */
    public function edit(Gerente $gerente)
    {
        return view('gerentes.edit', ['gerente' => $gerente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Gerente $gerente
     * @return View
     */
    public function update(Request $request, Gerente $gerente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Gerente $gerente
     * @return RedirectResponse
     */
    public function destroy(Gerente $gerente)
    {
        $gerente->pessoa()->endereco()->delete();
        $gerente->delete();
        $gerente->pessoa()->delete();
        return redirect()->action([GerenteController::class, 'index']);
    }

    public function cadastroProduto(Gerente $gerente){

    }
}
