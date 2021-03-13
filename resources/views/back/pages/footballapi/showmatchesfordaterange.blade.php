@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Football Data API</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Competition Matches API</li>
            </ol>
        </div>
    </main>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Matches</h1>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">

                    <table class="table table-striped">
                        <tr>
                            <th>Competition Flag URL</th>
                            <th>Competition Area Name</th>
                            <th>Competition Name</th>
                            <th>Match Day</th>
                            <th>Home Team ID</th>
                            <th>Home Team</th>
                            <th>Home Score</th>                        
                            <th>Away Team ID</th>
                            <th>Away Team</th>
                            <th>Away Score</th>                         
                            <th>Status</th>
                            <th>Winner</th>            
                            <th>Duration</th>                      
                        </tr>
                        @foreach($data['matches'] as $array)
                        <tr> 
                            <td><img src="{{ $array['competition']['area']['ensignUrl'] }}" width="40" height="40"></td>  
                            <td>{{ $array['competition']['area']['name'] }}</td>            
                            <td>{{ $array['competition']['name'] }}</td>
                            <td>{{ $array['matchday'] }}</td>           
                            <td>{{ $array['homeTeam']['id'] }}</td>                        
                            <td>{{ $array['homeTeam']['name'] }}</td>   
                            <td>{{ $array['score']['fullTime']['homeTeam'] }}</td>                        
                            <td>{{ $array['awayTeam']['id'] }}</td>                        
                            <td>{{ $array['awayTeam']['name'] }}</td>  
                            <td>{{ $array['score']['fullTime']['awayTeam'] }}</td>                        
                            <td>{{ $array['status'] }}</td>
                            <td>{{ $array['score']['winner'] }}</td>
                            <td>{{ $array['score']['duration'] }}</td>            
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