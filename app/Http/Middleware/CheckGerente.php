<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckGerente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect('/')->with('error', 'É necessário estar logado para utilizar esta funcionalidade');
        }

        if(Auth::user()->tipo=='gerente'){
            return $next($request);
        }
        else{
            return redirect('home')->with('error', 'Você não possui acesso a esta funcionalidade');
        }
    }
}
