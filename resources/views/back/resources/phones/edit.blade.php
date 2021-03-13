@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Edit Phone</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Phone</li>
            </ol>
        </div>
    </main>

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
            </div>
        </div>
        <!-- /.row --> 

        <div class="row">
            <div class="col-lg-6">

                {{ Form::model($phone, array('method' => 'PATCH', 'route' => array('phone.update', $phone->id))) }}
                {{ csrf_field() }}

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
                <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                    <label for="user_id" class="control-label">User ID</label>

                    <div class="">
                        {{ Form::text('user_id', null, ['class' => 'form-control']) }}

                        @if ($errors->has('user_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_id') }}</strong>
                        </span>
                        @endif
                    </div>

                </div>

                <div class="form-group">
                    <div class="">
                        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
                        {{ link_to_route('phone.index', 'Cancel', $phone->id, array('class' => 'btn')) }}
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