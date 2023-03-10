<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <span class="sb-sidenav-menu-heading mt-3">Manajemen</span>

                @foreach($menus as $menu)

                <a class="nav-link" href="{{ route($menu->route) }}">
                    <div class="sb-nav-link-icon"><i class="fas {{ $menu->icon }}"></i></div>
                    {{ $menu->name }}
                </a>
                @endforeach
                
            </div>
        </div>
            <form class="d-inline-block form form-inline" action="search" method="POST">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" aria-describedby="btnNavbarSearch" name="search" />
                    <button class="btn btn-color" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>

        <div class="sb-sidenav-footer">
            <div class="d-flex align-items-start gap-12">
                <img src="{{ asset('img/default.png') }}" alt="Avatar">
                <div class="group">
                    <p>{{ Auth::user()->name; }}</p>
                </div>
            </div>
        </div>
    </nav>
</div>