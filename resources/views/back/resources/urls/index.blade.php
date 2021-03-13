@extends('back.layouts.default')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    URLs
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> List
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

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
                <p>{{ link_to_route('urls.create', 'Add new URL') }}</p>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>URL</th>
                                <th>Description</th>
                                <th>Panel</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($urls as $url)
                                <tr>
                                <td>{{ $url->title }}</td>
                                <td>{{ $url->url }}</td>
                                <td>{{ $url->description }}</td>
                                <td>{{ $url->panel }}</td>
                                <td>{{ link_to_route('urls.edit', 'Edit', array($url->id), array('class' => 'btn btn-info')) }}</td>
                                <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('urls.destroy', $url->id))) }}
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

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/back.js') }}"></script>

@stop