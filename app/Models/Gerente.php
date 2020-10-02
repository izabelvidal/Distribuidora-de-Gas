<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gerente extends Pessoa
{
    use hasFactory;

    public function vendas()
    {
        return $this->hasMany('App\Models\Venda');
    }

    public function pessoa()
    {
        return $this->belongsTo('App\Models\Pessoa');
    }
}
