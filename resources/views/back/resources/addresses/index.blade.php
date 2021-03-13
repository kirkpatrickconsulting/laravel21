@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Address</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Address</li>
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
                {{ link_to_route('address.create', 'Create Address', NULL, array('class' => 'btn btn-info')) }}
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id ="dataTable" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Street</th>
                                <th>Street 2</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zip</th>
                                <th>Country ID</th>
                                <th>User_ID</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($addresses as $address)
                            <tr>
                                <td>{{ $address->user->name }}</td>
                                <td>{{ $address->street }}</td>
                                <td>{{ $address->street_2 }}</td>
                                <td>{{ $address->city }}</td>
                                <td>{{ $address->state }}</td>
                                <td>{{ $address->post_code }}</td>
                                <td>{{ $address->country_id }}</td>
                                <td>{{ $address->user_id }}</td>
                                <td>{{ link_to_route('address.show', 'Show', array($address->id), array('class' => 'btn btn-info')) }}</td>
                                <td>{{ link_to_route('address.edit', 'Edit', array($address->id), array('class' => 'btn btn-info')) }}</td>
                                <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('address.destroy', $address->id))) }}                       
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