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
     * @test
     */
    public function gerenteNomeInvalido()
    {
        $gerente = new Gerente;
        $gerente->nome = "ffg";
        $gerente->CPF = "12345678910";
        $gerente->email = "gerente@mail.com";
        $gerente->senha = "12345678";
        $gerente->nascimento = 04/11/1999;
        GerenteValidator::validate($gerente->toArray());
    }
}
