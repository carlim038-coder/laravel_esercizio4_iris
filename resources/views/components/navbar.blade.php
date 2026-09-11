<nav class="navbar navbar-expand-lg navbar-dark shadow-sm border-bottom" style="background-color: #000000; border-color: #00ff66 !important;">
    <div class="container">
        <!-- Spazio vuoto o brand rimosso, i link vanno a destra -->
        <div class="ms-auto"></div>

        <div class="navbar-nav">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}" style="{{ request()->routeIs('home') ? 'color: #00ff66 !important;' : '' }}">Home</a>
            <a class="nav-link {{ request()->routeIs('articles.index') ? 'active' : '' }}" href="{{ route('articles.index') }}" style="{{ request()->routeIs('articles.index') ? 'color: #00ff66 !important;' : '' }}">Tutti gli Articoli</a>
            <a class="nav-link {{ request()->routeIs('contact_us') ? 'active' : '' }}" href="{{ route('contact_us') }}" style="{{ request()->routeIs('contact_us') ? 'color: #00ff66 !important;' : '' }}">Contattaci</a>
        </div>
    </div>
</nav>