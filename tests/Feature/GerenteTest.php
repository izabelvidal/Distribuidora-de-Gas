<?php

namespace Tests\Feature;

use App\Models\Gerente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GerenteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCadastrarGerente()
    {
        $gerente = Gerente::factory()->make();
        $response = $this->post('/gerente', $gerente->toArray());
        $response->assertSeetext($gerente->nome);
    }
}
