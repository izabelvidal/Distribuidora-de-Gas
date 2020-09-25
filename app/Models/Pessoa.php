<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'senha', 'CPF', 'nascimento'
    ];

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        'email' => 'required|email',
        'senha' => 'required|min:8|confirmed',
        'CPF' => 'required|cpf',
        'nascimento' => 'required|date'
    ];

    public static $messages = [
        'nome.*' => 'O campo nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'email.*' => 'O campo email é obrigatório e deve ter entre 5 e 100 caracteres',
        'senha.*' => 'O campo senha é obrigatório e deve ter 8 caracteres(A-Z ou a-z e números)',
        'CPF.*' => 'O campo CPF é obrigatório e deve ter 11 caracteres',
        'nascimento.*' => 'O campo nascimento é obrigatório e deve ter entre 6 e 8 caracteres'
    ];

    public function endereco()
    {
        return $this->hasOne('Endereco');
    }
}
