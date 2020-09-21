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
        'quantidade_em_estoque' => 'required|min:0|max:100',
        'peso' => 'required|min:1|max:100',
        'preco' => 'required|min:40',
        'preco_revenda' => 'required|min:30'
    ];
}
