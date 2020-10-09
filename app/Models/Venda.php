<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{

    use hasFactory;

    protected $fillable = [
        'preco',
    ];

    public static $rules = [
        'cliente_id' => 'required',
        'preco' => 'required|numeric|min:30',
    ];

    public static $messages = [
        'cliente_id.*' => 'O campo Cliente id',
        'preco.*' => 'O campo preço é obrigatório e deve ser de no mínimo R$30,00',
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function funcionario()
    {
        return $this->belongsTo('App\Models\Funcionario');
    }

    public function gerente()
    {
        return $this->belongsTo('App\Models\Gerente');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }
}
