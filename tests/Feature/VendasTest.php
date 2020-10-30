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


    public function testGuestNaoPodeVisualizarVendas()
    {
        $venda = Venda::find(1);
        $this
            ->get(route('vendas.show', $venda))
            ->assertSessionHas('warning');
    }
}
