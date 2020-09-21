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

    public static $rules = [
        'nome' => 'required|min:5|max:100',
        'email' => 'required|min:5|max:100',
        'senha' => 'required|min:8|confirmed',
        'CPF' => 'required|min:5|max:100',
        'nascimento' => 'required|min:6|max:8'
    ];

    public function endereco()
    {
        return $this->hasOne('Endereco');
    }
}
