<!DOCTYPE html>
<html lang="en">
    <head>
        @include('back.includes.head')
    </head>

    <body class="sb-nav-fixed">

        @include('back.includes.nav')

        <div id="layoutSidenav">

            @include('back.includes.sidenav')
            @yield('content')

        </div>

    </body>

</html>