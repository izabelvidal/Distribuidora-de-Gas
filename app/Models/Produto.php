<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'marca', 'quantidade_em_estoque', 'peso', 'preco', 'preco_revenda'
    ];

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        'marca' => 'required|min:5|max:100',
        'quantidade_em_estoque' => 'required|min:1',
        'peso' => 'required|min:1',
        'preco' => 'required|min:2',
        'preco_revenda' => 'required|min:2'
    ];

    public static $messages = [
        'nome.*' => 'O campo nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'marca.*' => 'O campo bairro é obrigatório e deve ter entre 5 e 100 caracteres',
        'quantidade_em_estoque.*' => 'O campo quantidade em estoque é obrigatório e deve ter no mínimo 1 caracter',
        'peso.*' => 'O campo peso é obrigatório e deve ter no mínimo 1 caracter',
        'preco.*' => 'O campo preço é obrigatório e deve ter no mínimo 2 caracteres',
        'preco_revenda.*' => 'O campo preço revenda é obrigatório e deve ter no mínimo 2 caracteres'
    ];

    
}
