<?php

namespace Tests\Browser;

use App\Models\Produto;
use App\Models\Gerente;
use App\Models\Pessoa;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProdutoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $gerente = User::where('tipo', 'gerente')->first();       
        $this->browse(function (Browser $browser) use ($gerente)
        {
            $browser
                ->loginAs($gerente)
                ->visit('/produtos/create')
                ->type('nome', 'Gás de cozinha')
                ->type('marca', 'Fugaz')
                ->type('quantidade_em_estoque', '40')
                ->type('peso', '5')
                ->type('preco', '60.00')
                ->type('preco_revenda', '50.00')
                ->pause(2000)
                ->assertSee('Gás de cozinha');
        });
        
    }
}
