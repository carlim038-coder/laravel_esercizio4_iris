<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <div class="navbar-nav ms-auto">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            <a class="nav-link {{ request()->routeIs('articles.index') ? 'active' : '' }}" href="{{ route('articles.index') }}">Tutti gli Articoli</a>
        </div>
    </div>
</nav>