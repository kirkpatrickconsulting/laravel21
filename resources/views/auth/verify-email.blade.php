@extends('front.layouts.default')
@section('content')

    <div class="container loginregister">

        <div class="row">
            <div class="container-fluid">
                <!-- Page Heading/Breadcrumbs -->
                <h1 class="mt-4 mb-3">Login
                </h1>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Login</li>
                </ol>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <span>Verify Email from inbox or press button to resend</span>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('verification.send') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-cannabis"></i> Resend
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>

@stop
