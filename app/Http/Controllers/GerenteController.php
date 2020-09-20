<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteController extends Controller
{
    public function cadastro(){
        return view('User/Gerente/cadastrar');
    }
}
