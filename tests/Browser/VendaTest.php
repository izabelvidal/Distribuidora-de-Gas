<?php

namespace Tests\Browser;

use App\Models\User;
use App\Models\Produto;
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
        $produto = Produto::where('quantidade_em_estoque', '>', '5')->first();
        $user = User::where('tipo', 'cliente')->first();
        $this->browse(function (Browser $browser) use ($user, $produto) {
            $browser
            ->loginAs($user)
            ->visit(route('produtos.show', $produto))
            ->type('quantidade', 2)
            ->press('adicionar')
            ->visit(route('vendas.create'))
            ->select('forma_pagamento', 'Debito')
            ->press('efetuar')
            ->assertSee($produto->nome);
        });
    }
}
