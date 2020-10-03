<?php

namespace Tests\Browser;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Pessoa;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ClienteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $cliente = Cliente::factory()->make(["pessoa_id" => 0]);
        $cliente->pessoa = Pessoa::factory()->make();
        $cliente->pessoa->endereco = Endereco::factory()->make();
        $this->browse(function (Browser $browser) use ($cliente) {
            $browser->visit('/clientes/create')
                ->type('tipo', $cliente->tipo)
                ->type('telefone', $cliente->telefone)
                ->type('email', $cliente->pessoa->email)
                ->type('nome', $cliente->pessoa->nome)
                ->type('nascimento', $cliente->pessoa->nascimento->date('d/m/Y'))
                ->type('CPF', $cliente->pessoa->CPF)
                ->type('senha', $cliente->pessoa->senha)
                ->type('senha_confirmation', $cliente->pessoa->senha)
                ->type('rua', $cliente->pessoa->endereco->rua)
                ->type('cidade', $cliente->pessoa->endereco->cidade)
                ->type('numero', $cliente->pessoa->endereco->numero)
                ->type('CEP', $cliente->pessoa->endereco->CEP)
                ->type('bairro', $cliente->pessoa->endereco->bairro)
                ->pause(2000)
                ->press('cadastrar')
                ->assertSee('CRIOU');
        });
    }
}
