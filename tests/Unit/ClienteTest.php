<?php

namespace Tests\Unit;

use App\Models\Cliente;
use App\Models\Pessoa;
use App\Models\Produto;
use App\Validator\ClienteValidator;
use App\Validator\ProdutoValidator;
use App\Validator\ValidationException;
use Database\Factories\PessoaFactory;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Validator;

class ClienteTest extends TestCase
{

    public function testClienteComCpfInvalido()
    {
        $cliente = new Cliente();
        $cliente->pessoa = Pessoa::factory()->make(['CPF' => '000000000']);
        $validator = Validator::make($cliente->pessoa->toArray(), Pessoa::$rules);
        $this->assertFalse($validator->fails());
    }
}
