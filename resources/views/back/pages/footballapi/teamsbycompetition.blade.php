@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Football Data</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Football Data</li>
            </ol>
        </div>
    </main>

    <div class="row">
        <div class="col-lg-12">

            <table class="table table-striped">
                <tr>
                    <th>Country</th>
                </tr>
                    @foreach($data['teams'] as $array)  
                    <tr>
                        <td>{{ $array['name'] }}</td>
                    </tr>
                    @endforeach
            </table>

        </div>
    </div>
    <!-- /.row -->

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