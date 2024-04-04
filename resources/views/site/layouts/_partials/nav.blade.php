<header class="header-container">
    <div id="image-container"></div>
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
                    <a href="{{ url('/home') }}"> Home </a>
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
                <a href="{{ route('login') }}">Logar</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"> Registre-se</a>
                @endif
            @endauth
        </nav>
    @endif
</header>
