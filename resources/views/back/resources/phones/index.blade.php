@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Phone</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Phone</li>
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
            <div class="col-lg-12">
                {{ link_to_route('phone.create', 'Create Phone', NULL, array('class' => 'btn btn-info')) }}
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>                                            
                                <th>Phone</th>
                                <th>User_ID</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($phones as $phone)
                            <tr>
                                <td>{{ $phone->user->name }}</td>
                                <td>{{ $phone->phone }}</td>
                                <td>{{ $phone->user->id }}</td>
                                <td>{{ link_to_route('phone.show', 'Show', array($phone->id), array('class' => 'btn btn-info')) }}</td>
                                <td>{{ link_to_route('phone.edit', 'Edit', array($phone->id), array('class' => 'btn btn-info')) }}</td>
                                <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('phone.destroy', $phone->id))) }}                       
                                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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