<?php

namespace Tests\Unit;


use App\Models\Gerente;
use App\Models\Pessoa;
use Tests\TestCase;
use Illuminate\Support\Facades\Validator;

class GerenteTest extends TestCase
{
    public function testGerenteComNomeInvalido(){
        $gerente = new Gerente();
        $gerente->pessoa = Pessoa::factory()->make(['nome' => 'abc']);
        $validator = Validator::make($gerente->pessoa->toArray(), Pessoa::$rules);
        $this->assertTrue($validator->fails());
    }
}
