<?php

namespace Tests\Feature;

use App\Models\Cliente;
use Tests\TestCase;

class ClienteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDeveVisualizarClienteCadastrado()
    {
        $cliente = Cliente::find(1);
        $this
            ->actingAs($cliente->pessoa->user)
            ->get(route('clientes.show', [$cliente]))
            ->assertSee($cliente->pessoa->nome);
    }
}
