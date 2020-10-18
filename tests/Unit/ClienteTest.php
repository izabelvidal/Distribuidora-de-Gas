<?php

namespace Tests\Unit;

use App\Models\Cliente;
use App\Models\Pessoa;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class ClienteTest extends TestCase
{

    public function testClienteComCpfInvalido()
    {
        $cliente = Cliente::factory()->make();
        $cliente->pessoa = Pessoa::factory()->make(['CPF' => '000000000']);
        $validator = Validator::make($cliente->pessoa->toArray(), Pessoa::$rules);
        $this->assertTrue($validator->fails());
    }
}
