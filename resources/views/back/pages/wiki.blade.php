@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Wiki</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Wiki</li>
            </ol>
        </div>
    </main>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <pre>
                <code>
                    $value = config('app.timezone', 'Asia/Seoul');
                    config(['app.timezone' => 'America/Chicago']); 
                </code>
                </pre>

                <pre>
                <code>
                    php artisan cache:clear
                    php artisan route:cache
                    php artisan config:cache
                    php artisan view:clear
                </code>
                </pre>

                <<pre>
              <code>
                p { color: red; }
                body { background-color: #eee; }
              </code>
                </pre>

                <pre>
              <code>
                {{ $data }}
              </code>
                </pre>

            </div>
        </div>
        <!-- /.row -->

    </div>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>

@stop