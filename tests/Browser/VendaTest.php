<?php

namespace Tests\Browser;

use App\Models\Cliente;
use App\Models\Venda;
use App\Models\Produto;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class VendaTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $venda = Venda::factory()->make();
        $this->browse(function (Browser $browser) use ($venda) {
            $browser->visit('/vendas/create')
            ->select('cliente_id', $venda->cliente)
            ->select('produto_id', $venda->items[0]->produto)
                ->type('quantidade', $cliente->pessoa->endereco->CEP)
                ->type('b', $cliente->pessoa->endereco->bairro)
                ->pause(2000)
                ->press('cadastrar')
                ->assertSee('CRIOU');
        });
    }
}