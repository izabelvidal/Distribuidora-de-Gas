<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
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
