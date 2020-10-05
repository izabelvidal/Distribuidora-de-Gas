<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Venda;
use Tests\TestCase;

class VendasTest extends TestCase
{
    

    public function testExample()
    {
        $venda = Venda::factory()->make();
        $array = $cliente->toarray();
        $array['produto_id'] = Produto::find(1);
        $array['quantidade'] = 1;
        $array['cliente_id'] = Cliente::find(1);
        $response = $this->post('/vendas', $array);
        $response->assertSeeText($venda->preço);
    }
}
