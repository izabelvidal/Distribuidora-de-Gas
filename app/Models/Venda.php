<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{

    protected $fillable = [
        'Produto', 'Cliente', 'preco', 'data', 'quantidade_de_pedidos'
    ];

    public static $rules = [
        'Prioduto' => 'required',
        'Cliente' => 'required',
        'preco' => 'required|numeric|min:30',
        'data' => 'required|data',
        'quantidade_de_pedidos' => 'required|numeric|min:1',
    ];

    public static $messages = [
        'Produto.*' => 'O campo Produto é obrigatório',
        'Cliente.*' => 'O campo Cliente',
        'preco.*' => 'O campo preço é obrigatório e deve ser de no mínimo R$30,00',
        'data.*' => 'O campo data é obrigatório',
        'quantidade_de_pedidos.*' => 'O campo quantidade de pedidos é obrigatório e deve ser de no mínimo 1'
    ];

    public function cliente()
    {
        return $this->belongsTo('Cliente');
    }

    public function funcionario()
    {
        return $this->belongsTo('Funcionario');
    }

    public function gerente()
    {
        return $this->belongsTo('Gerente');
    }

    public function items()
    {
        return $this->hasMany('Item');
    }
}
