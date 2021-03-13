@extends('back.layouts.default')

@section('content')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Create User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">User Create</li>
                        </ol>
                    </div>
                </main>
                
                <div class="container">               
                
                <div class="row">
                    <div class="col-lg-6">

                {{ Form::open(array('route' => 'users.store')) }}

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
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                                    <label for="address1" class="control-label">Address 1</label>

                                    <div class="">
                                        {{ Form::text('address1', null, ['class' => 'form-control']) }}

                                        @if ($errors->has('address1'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address1') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                                    <label for="address2" class="control-label">Address 2</label>

                                    <div class="">
                                        {{ Form::text('address2', null, ['class' => 'form-control']) }}

                                        @if ($errors->has('address2'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address2') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                    <label for="city" class="control-label">City</label>

                                    <div class="">
                                        {{ Form::text('city', null, ['class' => 'form-control']) }}

                                        @if ($errors->has('city'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                    <label for="state" class="control-label">State</label>

                                    <div class="">
                                        {{ Form::text('state', null, ['class' => 'form-control']) }}

                                        @if ($errors->has('state'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                                    <label for="zip" class="control-label">Zip</label>

                                    <div class="">
                                        {{ Form::text('zip', null, ['class' => 'form-control']) }}

                                        @if ($errors->has('zip'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('zip') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="control-label">Phone</label>

                                    <div class="">
                                        {{ Form::text('phone', null, ['class' => 'form-control']) }}

                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                            {{ Form::submit('Submit', array('class' => 'btn')) }}
                            </div>
                        </div>

                {{ Form::close() }}
                        </div>
                </div>
                    
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