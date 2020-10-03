<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CadastrarProdutoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function gerenteNaoLogado(){
        $response = $this
		->get('produto.create')
		->assertStatus(403);
    }
}
