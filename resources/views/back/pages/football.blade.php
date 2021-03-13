@extends('back.layouts.default')

@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Football Data API</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Competition Select</li>
                </ol>
            </div>
        </main>

        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <h1>Competitions</h1>

                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">

                    <table id="dataTable" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Competition ID</th>
                            <th>Area ID</th>
                            <th>Name</th>
                            <th>Area</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data['competitions'] as $array)
                            <tr>
                                <td>{{ $array['id'] }}</td>
                                <td>{{ $array['area']['id'] }}</td>
                                <td>{{ $array['name'] }}</td>
                                <td>{{ $array['area']['name'] }}</td>
                            </tr>
                        </tbody>
                        @endforeach

                    </table>

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
