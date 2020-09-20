<?php

namespace App\Models;

class Funcionario extends Pessoa
{
    public function vendas()
    {
        return $this->hasMany('Venda');
    }

    public function pessoa()
    {
        return $this->belongsTo('Pessoa');
    }
}
