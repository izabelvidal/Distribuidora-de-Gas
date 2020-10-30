<?php

namespace Tests\Feature;

use App\Models\Produto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class ProdutoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testUsuarioGuestNaoPodeCadastrarProduto()
    {
        $produto = Produto::factory()->make();
        $this
            ->post('/produtos', $produto->toArray())
            ->assertSessionHas('warning');
    }
}
