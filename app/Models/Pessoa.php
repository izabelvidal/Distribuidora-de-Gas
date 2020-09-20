<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'senha', 'CPF', 'nascimento'
    ];

    public function endereco()
    {
        return $this->hasOne('Endereco');
    }
}
