<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function produto()
    {
        return $this->belongsTo('Produto');
    }

    public function venda()
    {
        return $this->belongsTo('Venda');
    }
}
