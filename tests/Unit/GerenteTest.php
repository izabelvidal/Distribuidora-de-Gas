<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Gerente;
use App\Validator\GerenteValidator;

class GerenteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     * @expectedException App\Validator\ValidationException
     */
    public function testGerenteNomeInvalido()
    {
        $gerente = Gerente::factory()->make();
        $dados = $gerente->toArray();
        $dados['nome'] = "abc";
        GerenteValidator::validate($dados);
        $this->assertTrue(True);
    }

    /**
     * @expectedException App\Validator\ValidationException
     * @test
     */
    public function testGerenteCPFInvalido()
    {
        $gerente = Gerente::factory()->make();
        $dados = $gerente->toArray();
        $dados['CPF'] = '123de';
        GerenteValidator::validate($gerente->toArray());
        $this->assertTrue(True);
    }
}
