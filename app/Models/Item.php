<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use hasFactory;

    protected $fillable = [
        'quantidade', 'preco'
    ];

    public static $rules = [
        'quantidade' => 'required',
    ];

    public function produto()
    {
        return $this->belongsTo('App\Models\Produto');
    }

    public function venda()
    {
        return $this->belongsTo('App\Models\Venda');
    }
}
