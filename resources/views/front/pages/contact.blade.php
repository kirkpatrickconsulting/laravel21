@extends('front.layouts.default')
@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact
            <small>Subheading</small>
        </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->

            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.3259021305657!2d-120.83712078460513!3d37.52381417980592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809106f1d0f46a07%3A0x461f8e3c0b219a6!2s3400%20Colorado%20Ave%2C%20Turlock%2C%20CA%2095382!5e0!3m2!1sen!2sus!4v1615263584550!5m2!1sen!2sus"
                    width="700" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Home</h3>
                <p>
                    3400 Colorado Ave.<br>Turlock, CA 95382<br>
                </p>
                <p><i class="fas fa-phone"></i>
                    <abbr title="Phone">P</abbr>: (209) 555-1212</p>
                <p><i class="fas fa-envelope"></i>
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p><i class="fas fa-clock"></i>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fas fa-facebook-f fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-linkedin-in fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-google-pay fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                @endif
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-6">
                <h3>Send us a Message</h3>
                {!! Form::open(array('route'=>'contactus.save')) !!}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone" class="col-md-4 control-label">Phone</label>

                    <div class="">
                        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                        @if ($errors->has('phone'))
                            <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('messagetext') ? ' has-error' : '' }}">
                    <label for="messagetext" class="col-md-4 control-label">Message</label>

                    <div class="">
                        <input id="messagetext" type="textarea" class="form-control" name="messagetext"
                               value="{{ old('messagetext') }}">

                        @if ($errors->has('messagetext'))
                            <span class="help-block">
                        <strong>{{ $errors->first('messagetext') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn"></i>Submit
                        </button>

                    </div>
                </div>

                {!! Form::close() !!}
            </div>

        </div>
        <!-- /.row -->

        <hr>


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
        <!-- /.container -->
    </footer>

@stop
