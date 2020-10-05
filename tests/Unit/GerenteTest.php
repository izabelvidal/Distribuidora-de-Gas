<?php

namespace Tests\Unit;


use App\Models\Gerente;
use App\Models\Pessoa;
use App\Models\Produto;
use App\Validator\GerenteValidator;
use App\Validator\ProdutoValidator;
use App\Validator\ValidationException;
use Database\Factories\PessoaFactory;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Validator;

class GerenteTest extends TestCase
{
    public function testClienteComNomeInvalido(){
        $gerente = new Gerente();
        $gerente->pessoa = Pessoa::factory()->make(['nome' => 'abc']);
        $validator = Validator::make($gerente->pessoa->toArray(), Pessoa::$rules);
        $this->assertFalse($validator->fails());
    }
}
