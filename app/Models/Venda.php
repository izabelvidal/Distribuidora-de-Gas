<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use hasFactory;

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
