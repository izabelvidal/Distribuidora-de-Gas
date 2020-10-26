<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Funcionario extends Pessoa
{
    use hasFactory;

    protected $fillable = [
        'admissao',
    ];

    public static $rules = [
        'admissao' => 'required'
    ];

    public function vendas()
    {
        return $this->hasMany('App\Models\Venda');
    }

    public function pessoa()
    {
        return $this->belongsTo('App\Models\Pessoa');
    }
}
