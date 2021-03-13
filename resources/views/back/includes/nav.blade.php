<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ url('/dashboard') }}">Dashboard</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fa fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href={{ url('/dashboard') }}>Dashboard</a>
                <a class="dropdown-item" href={{ url('/admin') }}>Admin</a>
                <a class="dropdown-item" href={{ url('/football') }}>Football</a>
                <a class="dropdown-item" href={{ url('/wiki') }}>Wiki</a>
                <a class="dropdown-item" href={{ url('/weather') }}>Weather</a>
                <a class="dropdown-item" href={{ url('/blankpage') }}>Blankpage</a>
                <a class="dropdown-item" href={{ url('/test') }}>Test</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href={{ url('/') }}>Home</a>
                <form method="POST" action="http://laravel21.laravelapp.com/logout">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a class="dropdown-item" href="http://laravel21.laravelapp.com/logout" onclick="event.preventDefault();
                            this.closest('form').submit();">Log Out</a>
                </form>
            </div>
        </li>
    </ul>
</nav>
