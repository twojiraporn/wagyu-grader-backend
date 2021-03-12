<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a href="/" class="navbar-item">
            Wagyu
        </a>

        <a role="button" data-target="navMenu" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu" id="navMenu">
        <a href="/home" class="navbar-item">
            Home
        </a>
        <a class="navbar-item" href="{{ route('images.index') }}">
            Check Grade of Wagyu
        </a>
        <a class="navbar-item" href="{{ route('reports.index') }}">
            Report
        </a>
    </div>

</nav>
