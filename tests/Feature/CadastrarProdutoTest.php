<?php

namespace Tests\Feature;

use App\Models\Produto;
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

    public function testCadastrarProduto()
    {
        $produto = Produto::factory()->make();
        $response = $this->post('/produtos', $produto->toArray());
        $response->assertSeeText($produto->marca);
    }
}
