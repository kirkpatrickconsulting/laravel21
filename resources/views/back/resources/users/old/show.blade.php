@extends('back.layouts.default')

@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Show User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Show User</li>
                        </ol>
                    </div>
                </main>
                
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-6">

                            {{ Form::model($user) }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Name</label>

                                <div class="">
                                    {{ Form::text('name', null, ['class' => 'form-control']) }}

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>

                                <div class="">
                                    {{ Form::text('email', null, ['class' => 'form-control']) }}

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>

                            {{ Form::close() }}

                        </div>
                    </div>
                    <!-- /.row -->  


                </div>
                <!-- /.container-fluid -->
                
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