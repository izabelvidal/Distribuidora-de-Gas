<?php

namespace Tests\Unit;

use App\Models\Item;
use App\Models\Produto;
use App\Models\Venda;
use PHPUnit\Framework\TestCase;

class VendasTest extends TestCase
{
    
    public function testRetiradaDoEstoque()
    {
        $Venda = venda::factory()->make();
        $item = Item::factory()-> make(['quantidade' => 1]);
        $produto = Produto::factory() -> make(['quantidade_em_estoque'=> 3]);
        $item->produto()->save($produto);
        $item->retirar_de_estoque();
        $venda->items()->save($item);
        $venda->save();
        $this->assertThat($produto->refresh()->quantidade_em_estoque, 2);


    
    }
}
