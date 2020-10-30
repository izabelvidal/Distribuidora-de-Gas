<nav class="navbar navbar-expand-md navbar-dark navbar">
    <a class="navbar-brand ml-2" href="#">
        <img class="ml-5" src="{{ asset('images/fugaz.png') }}" alt="">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Abrir Navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
            @canany(['create', 'viewAny'], App\Models\Cliente::class)
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Clientes</a>
                <div class="dropdown-menu">
                    @can('create', App\Models\Cliente::class)
                        <a href="{{ route('clientes.create') }}" class="dropdown-item">Create</a>
                    @endcan
                    @can('viewAny', App\Models\Cliente::class)
                        <a href="{{ route('clientes.index') }}" class="dropdown-item">Index</a>
                    @endcan
                </div>
            </li>
            @endcanany
            @canany(['create', 'viewAny'], App\Models\Produto::class)
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Produtos</a>
                <div class="dropdown-menu">
                    @can('create', App\Models\Produto::class)
                        <a href="{{ route('produtos.create') }}" class="dropdown-item">Create</a>
                    @endcan
                    @can('viewAny', App\Models\Produto::class)
                        <a href="{{ route('produtos.index') }}" class="dropdown-item">Index</a>
                    @endcan
                </div>
            </li>
            @endcanany
            @canany(['create', 'viewAny'], App\Models\Venda::class)
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Vendas</a>
                <div class="dropdown-menu">
                    @can('create', App\Models\Venda::class)
                        <a href="{{ route('vendas.create') }}" class="dropdown-item">Create</a>
                    @endcan
                    @can('viewAny', App\Models\Venda::class)
                        <a href="{{ route('vendas.index') }}" class="dropdown-item">Index</a>
                    @endcan
                </div>
            </li>
            @endcanany
            @canany(['create', 'viewAny'], App\Models\Funcionario::class)
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Funcionários</a>
                <div class="dropdown-menu">
                    @can('create', App\Models\Funcionario::class)
                        <a href="{{ route('funcionarios.create') }}" class="dropdown-item">Create</a>
                    @endcan
                    @can('viewAny', App\Models\Funcionario::class)
                        <a href="{{ route('funcionarios.index') }}" class="dropdown-item">Index</a>
                    @endcan
                </div>
            </li>
            @endcanany
            @canany(['create', 'viewAny'], App\Models\Gerente::class)
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Gerentes</a>
                <div class="dropdown-menu">
                    @can('create', App\Models\Gerente::class)
                        <a href="{{ route('gerentes.create') }}" class="dropdown-item">Create</a>
                    @endcan
                    @can('viewAny', App\Models\Gerente::class)
                        <a href="{{ route('gerentes.index') }}" class="dropdown-item">Index</a>
                    @endcan
                </div>
            </li>
            @endcanany
        </ul>
        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    @if(Route::currentRouteName() == 'clientes.create')
                        <a class="btn btn-outline-light ml-md-2" href="{{ route('login') }}">Login</a>
                    @else
                        <a class="btn btn-outline-light ml-md-2" href="{{ route('clientes.create') }}">Cadastrar</a>
                    @endif
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->pessoa->nome }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            <li>
                <a class="btn-outline-light btn" href="{{route('carrinho.index')}}">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                </a>
            </li>
        </ul>
    </div>


</nav>
