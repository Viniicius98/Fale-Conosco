<header class="header-container">
    @component('site.layouts._components.imagem')
        
    @endcomponent
    @if (Route::has('login'))
        <nav class="nav-container">
            @auth
                @if (request()->is('email/verify'))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @else
                    <a class="link" href="{{ url('/') }}"> Home </a>
                    <a class="link" href="{{ url('/enviar-solicitacao') }}"> Enviar Solicitação </a>
                    <a class="link" href="{{ url('/meus-registros') }}"> Meus Registros </a>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            @else
                <a class="link" href="{{ route('login') }}">Logar</a>
                @if (Route::has('register'))
                    <a class="link" href="{{ route('register') }}"> Registre-se</a>
                @endif
            @endauth
        </nav>
    @endif
</header>
