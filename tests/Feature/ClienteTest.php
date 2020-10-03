<?php

namespace Tests\Feature;

use App\Models\Cliente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClienteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCadastraCliente()
    {
        $cliente = Cliente::factory()->make();
        $response = $this->post('/clientes', $cliente->toArray());
        $response->assertSeeText($cliente->nome);
    }
}
