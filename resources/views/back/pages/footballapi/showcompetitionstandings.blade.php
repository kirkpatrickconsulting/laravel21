@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Football Data API</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Competition Standings API</li>
            </ol>
        </div>
    </main>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Standings</h1>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">

                    <table id="dataTable" class="table table-striped">
                        <tr>
                            <th>Position</th>
                            <th>Name</th>
                            <th>Won</th>
                            <th>Loss</th>
                            <th>Draw</th>
                            <th>Goal Diff</th>
                            <th>Points</th> 
                        </tr>
                        @foreach($data['standings'][0]['table'] as $array)
                        <tr>              
                            <td>{{ $array['position'] }}</td>
                            <td>{{ $array['team']['name'] }}</td>
                            <td>{{ $array['won'] }}</td>                        
                            <td>{{ $array['lost'] }}</td>                        
                            <td>{{ $array['draw'] }}</td>
                            <td>{{ $array['goalDifference'] }}</td>                          
                            <td>{{ $array['points'] }}</td>
                        </tr>
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