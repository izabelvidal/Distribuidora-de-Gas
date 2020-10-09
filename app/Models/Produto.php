<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use hasFactory;

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
        'quantidade_em_estoque' => 'required|numeric|min:0',
        'peso' => 'required|numeric|min:13',
        'preco' => 'required|numeric|min:40',
        'preco_revenda' => 'required|numeric|min:30'
    ];

    public static $messages = [
        'nome.*' => 'O campo nome é obrigatório e deve ter entre 5 e 100 caracteres',
        'marca.*' => 'O campo bairro é obrigatório e deve ter entre 5 e 100 caracteres',
        'quantidade_em_estoque.*' => 'O campo quantidade em estoque é obrigatório e deve ser de no mínimo 1',
        'peso.*' => 'O campo peso é obrigatório e deve ter no mínimo 13kg',
        'preco.*' => 'O campo preço é obrigatório e deve ser de no mínimo R$40,00',
        'preco_revenda.*' => 'O campo preço revenda é obrigatório e deve ser de no mínimo R$30,00'
    ];


}
