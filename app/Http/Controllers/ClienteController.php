<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pessoa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate(Pessoa::$rules);
        $cliente = new Cliente();
        $cliente->fill($validated);
        $cliente->save();
        return redirect()->action([ClienteController::class, 'show']);
    }

    /**
     * Display the specified resource.
     *
     * @param Cliente $cliente
     * @return View
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cliente $cliente
     * @return View
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Cliente $cliente
     * @return View
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cliente $cliente
     * @return RedirectResponse
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->pessoa()->endereco()->delete();
        $cliente->delete();
        $cliente->pessoa()->delete();
        return redirect()->action([ClienteController::class, 'index']);
    }
}
