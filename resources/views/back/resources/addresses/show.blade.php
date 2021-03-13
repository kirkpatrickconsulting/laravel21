@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Show Address</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Address</li>
            </ol>
        </div>
    </main>

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">

                {{ Form::model($address) }}

                <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                    <label for="street" class="control-label">Street</label>

                    <div class="">
                        {{ Form::text('street', null, ['class' => 'form-control']) }}

                        @if ($errors->has('street'))
                        <span class="help-block">
                            <strong>{{ $errors->first('street') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('street_2') ? ' has-error' : '' }}">
                    <label for="street_2" class="control-label">Street 2</label>

                    <div class="">
                        {{ Form::text('street_2', null, ['class' => 'form-control']) }}

                        @if ($errors->has('street_2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('street_2') }}</strong>
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

                <div class="form-group{{ $errors->has('post_code') ? ' has-error' : '' }}">
                    <label for="post_code" class="control-label">Zip Code</label>

                    <div class="">
                        {{ Form::text('post_code', null, ['class' => 'form-control']) }}

                        @if ($errors->has('post_code'))
                        <span class="help-block">
                            <strong>{{ $errors->first('post_code') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
                    <label for="country_id" class="control-label">Country ID</label>

                    <div class="">
                        {{ Form::text('country_id', null, ['class' => 'form-control']) }}

                        @if ($errors->has('country_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('country_id') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    <label for="user_id" class="control-label">User ID</label>

                    <div class="">
                        {{ Form::text('user_id', null, ['class' => 'form-control', 'readonly' => 'true']) }}

                        @if ($errors->has('user_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_id') }}</strong>
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