<?php

namespace Tests\Browser;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\Pessoa;
use App\Models\User;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ClienteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testDeveCadastrarClienteCorretamente()
    {
        $cliente = Cliente::factory()->make(["pessoa_id" => 0]);
        $cliente->pessoa = Pessoa::factory()->make(['user_id' => 0]);
        $cliente->pessoa->user = User::factory()->make();
        $cliente->pessoa->endereco = Endereco::factory()->make();
        $this->browse(function (Browser $browser) use ($cliente) {
            $browser
                ->visit('/clientes/create')
                ->radio('tipo', 'consumidor')
                ->type('telefone', $cliente->pessoa->telefone)
                ->type('email', $cliente->pessoa->user->email)
                ->type('nome', $cliente->pessoa->nome)
                ->type('nascimento', date('dmY'))
                ->type('CPF', $cliente->pessoa->CPF)
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->type('rua', $cliente->pessoa->endereco->rua)
                ->type('cidade', $cliente->pessoa->endereco->cidade)
                ->type('numero', $cliente->pessoa->endereco->numero)
                ->type('CEP', $cliente->pessoa->endereco->CEP)
                ->type('bairro', $cliente->pessoa->endereco->bairro)
                ->screenshot('cliente_pre_cadastro')
                ->press('cadastrar')
                ->screenshot('cliente_cadastrado')
                ->assertPathIs('/login')
                ->assertSee('Cliente salvo com sucesso');
        });
    }
}
