<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', ['funcionarios' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return View
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Funcionario $funcionario
     * @return View
     */
    public function show(Funcionario $funcionario)
    {
        return view('funcionarios.show', ['funcionario' => $funcionario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Funcionario $funcionario
     * @return View
     */
    public function edit(Funcionario $funcionario)
    {
        return view('funcionarios.edit', ['funcionarios' => $funcionario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Funcionario $funcionario
     * @return Response
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Funcionario $funcionario
     * @return RedirectResponse
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->pessoa()->endereco()->delete();
        $funcionario->delete();
        $funcionario->pessoa()->delete();
        return redirect()->action([FuncionarioController::class, 'index']);
    }
}
