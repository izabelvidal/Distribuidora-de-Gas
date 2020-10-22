<?php

namespace App\Providers;

use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Gerente;
use App\Models\Produto;
use App\Models\Team;
use App\Models\Venda;
use App\Policies\ClientePolicy;
use App\Policies\FuncionarioPolicy;
use App\Policies\GerentePolicy;
use App\Policies\ProdutoPolicy;
use App\Policies\TeamPolicy;
use App\Policies\VendaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Venda::class => VendaPolicy::class,
        Funcionario::class => FuncionarioPolicy::class,
        Cliente::class => ClientePolicy::class,
        Produto::class => ProdutoPolicy::class,
        Gerente::class => GerentePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
