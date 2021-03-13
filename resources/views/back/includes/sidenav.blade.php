<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ url('/admin') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-tachometer-alt"></i></div>
                    Admin
                </a>
                <div class="sb-sidenav-menu-heading">Pages</div>

                <a class="nav-link" href="{{ url('/football') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-chart-area"></i></div>
                    Football
                </a>
                <a class="nav-link" href="{{ url('/wiki') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-table"></i></div>
                    Wiki
                </a>
                <a class="nav-link" href="{{ url('/weather') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-table"></i></div>
                    Weather
                </a>
                <a class="nav-link" href="{{ url('/stripe') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-table"></i></div>
                    Stripe
                </a>

                <div class="sb-sidenav-menu-heading">Testing</div>

                <a class="nav-link" href="{{ url('/blankpage') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-chart-area"></i></div>
                    Blankpage
                </a>
                <a class="nav-link" href="{{ url('/test') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-table"></i></div>
                    Test
                </a>
                <a class="nav-link" href="{{ url('/logs') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-table"></i></div>
                    Logs
                </a>
                <div class="sb-sidenav-menu-heading">Resources</div>

                <a class="nav-link" href="{{ url('/users') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-chart-area"></i></div>
                    User Index
                </a>

                <a class="nav-link" href="{{ url('/phone') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-chart-area"></i></div>
                    Phone Index
                </a>

                <a class="nav-link" href="{{ url('/address') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-chart-area"></i></div>
                    Address Index
                </a>

                <a class="nav-link" href="{{ url('/contact') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-chart-area"></i></div>
                    Contact Index
                </a>

                <a class="nav-link" href="{{ url('/product') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-chart-area"></i></div>
                    Product Index
                </a>

                <a class="nav-link" href="{{ url('/roles') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-chart-area"></i></div>
                    Roles Index
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
