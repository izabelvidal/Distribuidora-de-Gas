<?php

namespace Tests\Unit;

use App\Models\Produto;
use App\Validator\ProdutoValidator;
use App\Validator\ValidationException;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Validator;


class ProdutoValidatorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testProdutoPesoInvalido()
    {
        $produto = new Produto();
        $produto->nome = "Gás de cozinha";
        $produto->marca = "fugaz";
        $produto->quantidade_em_estoque = 1;
        $produto->peso = 1;
        $produto->preco = 50.00;
        $produto->preco_revenda = 40.00;
        $validator = Validator::make($produto->toArray(), Produto::$rules);
        $this->assertTrue($validator->fails());   
     }
}
