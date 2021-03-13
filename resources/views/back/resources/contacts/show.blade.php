@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Show Contacts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Show Contact</li>
            </ol>
        </div>
    </main>

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">

                {{ Form::model($contact) }}

                <div class="form-group{{ $errors->has('salutation') ? ' has-error' : '' }}">
                    <label for="salutation" class="control-label">Salutation</label>

                    <div class="">
                        {{ Form::text('salutation', null, ['class' => 'form-control']) }}

                        @if ($errors->has('salutation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('salutation') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label for="first_name" class="control-label">First Name</label>

                    <div class="">
                        {{ Form::text('first_name', null, ['class' => 'form-control']) }}

                        @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                    <label for="middle_name" class="control-label">Middle Name</label>

                    <div class="">
                        {{ Form::text('middle_name', null, ['class' => 'form-control']) }}

                        @if ($errors->has('middle_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('middle_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label for="last_name" class="control-label">Last Name</label>

                    <div class="">
                        {{ Form::text('last_name', null, ['class' => 'form-control']) }}

                        @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email_address') ? ' has-error' : '' }}">
                    <label for="email_address" class="control-label">Email Address</label>

                    <div class="">
                        {{ Form::text('email_address', null, ['class' => 'form-control']) }}

                        @if ($errors->has('email_address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email_address') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                    <label for="company" class="control-label">Company</label>

                    <div class="">
                        {{ Form::text('company', null, ['class' => 'form-control']) }}

                        @if ($errors->has('company'))
                        <span class="help-block">
                            <strong>{{ $errors->first('company') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('job_title') ? ' has-error' : '' }}">
                    <label for="job_title" class="control-label">Job Title</label>

                    <div class="">
                        {{ Form::text('job_title', null, ['class' => 'form-control']) }}

                        @if ($errors->has('job_title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('job_title') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                    <label for="department" class="control-label">Department</label>

                    <div class="">
                        {{ Form::text('department', null, ['class' => 'form-control']) }}

                        @if ($errors->has('department'))
                        <span class="help-block">
                            <strong>{{ $errors->first('department') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                    <label for="website" class="control-label">Web Site</label>

                    <div class="">
                        {{ Form::text('website', null, ['class' => 'form-control']) }}

                        @if ($errors->has('website'))
                        <span class="help-block">
                            <strong>{{ $errors->first('website') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('office_phone') ? ' has-error' : '' }}">
                    <label for="office_phone" class="control-label">Office Phone</label>

                    <div class="">
                        {{ Form::text('office_phone', null, ['class' => 'form-control']) }}

                        @if ($errors->has('office_phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('office_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('mobile_phone') ? ' has-error' : '' }}">
                    <label for="mobile_phone" class="control-label">Mobile Phone</label>

                    <div class="">
                        {{ Form::text('mobile_phone', null, ['class' => 'form-control']) }}

                        @if ($errors->has('mobile_phone'))
                        <span class="help-block">
                            <strong>{{ $errors->first('mobile_phone') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('fax_number') ? ' has-error' : '' }}">
                    <label for="fax_number" class="control-label">Fax Number</label>

                    <div class="">
                        {{ Form::text('fax_number', null, ['class' => 'form-control']) }}

                        @if ($errors->has('fax_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('fax_number') }}</strong>
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