<?php

namespace Tests\Unit;

use App\Models\Produto;
use App\Validator\ProdutoValidator;
use App\Validator\ValidationException;
use PHPUnit\Framework\TestCase;

class ProdutoValidatorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testProdutoExiste()
    {
        Produto::factory()->make();
        $this->assertTrue(true);
    }

    public function testProdutoCorreto(){
        
    }
}
