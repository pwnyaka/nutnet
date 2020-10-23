<ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home')?'active':'' }}" href="{{ route('home') }}">Главная</a></li>
    <li class="nav-item"><a class="nav-link {{ request()->routeIs('audio')?'active':'' }}" href="{{ route('audio') }}">Список пластинок</a></li>
</ul>
