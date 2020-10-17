<?php

namespace Tests\Unit;

use App\Models\Item;
use App\Models\Produto;
use App\Models\Venda;
use Tests\TestCase;

class VendasTest extends TestCase
{
    public function testRetiradaDoEstoque()
    {
        $venda = venda::factory()->make();
        $venda->save();
        $item = Item::factory()->make(['quantidade' => 1]);
        $produto = Produto::factory()->create(['quantidade_em_estoque' => 3]);
        $item->produto()->associate($produto);
        $produto->remover_de_estoque($item->quantidade);
        $venda->items()->save($item);
        $this->assertEquals($produto->refresh()->quantidade_em_estoque, 2);
    }
}
