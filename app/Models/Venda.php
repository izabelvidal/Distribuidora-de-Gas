<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{

    protected $fillable = [
        'preco', 'data'
    ];

    public static $rules = [
        'Item' => 'required',
        'cliente_id' => 'required',
        'preco' => 'required|numeric|min:30',
        'data' => 'required|data',
        'quantidade_de_pedidos' => 'required|numeric|min:1',
    ];

    public static $messages = [
        'Item.*' => 'O campo Produto é obrigatório',
        'cliente_id.*' => 'O campo Cliente',
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
