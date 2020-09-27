<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use hasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rua', 'bairro', 'cidade', 'numero', 'CEP'
    ];

    public static $rules = [
        'rua' => 'required|min:5|max:100',
        'bairro' => 'required|min:5|max:100',
        'cidade' => 'required|min:5|max:100',
        'numero' => 'required|min:1|max:4',
        'CEP' => 'required|min:5|max:10'
    ];

    public static $messages = [
        'rua.*' => 'O campo rua é obrigatório e deve ter entre 5 e 100 caracteres',
        'bairro.*' => 'O campo bairro é obrigatório e deve ter entre 5 e 100 caracteres',
        'cidade.*' => 'O campo cidade é obrigatório e deve ter entre 5 e 100 caracteres',
        'numero.*' => 'O campo número é obrigatório e deve ter entre 1 e 4 caracteres',
        'CEP.*' => 'O campo CEP é obrigatório e deve ter entre 5 e 10 caracteres'
    ];

    public function pessoa()
    {
        return $this->belongsTo('App\Models\Pessoa');
    }
}
