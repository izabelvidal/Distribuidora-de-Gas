<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function endereco()
    {
        return $this->hasOne('Endereco');
    }
}
