@extends('back.layouts.default')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Contact</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Contact</li>
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
                {{ link_to_route('contact.create', 'Create Contact', NULL, array('class' => 'btn btn-info')) }}
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Office Phone</th>
                                <th>User ID</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->first_name }}</td>
                                <td>{{ $contact->middle_name }}</td>
                                <td>{{ $contact->last_name }}</td>
                                <td>{{ $contact->email_address }}</td>
                                <td>{{ $contact->office_phone }}</td>
                                <td>{{ $contact->user_id }}</td>
                                <td>{{ link_to_route('contact.show', 'Show', array($contact->id), array('class' => 'btn btn-info')) }}</td>
                                <td>{{ link_to_route('contact.edit', 'Edit', array($contact->id), array('class' => 'btn btn-info')) }}</td>
                                <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('contact.destroy', $contact->id))) }}                       
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