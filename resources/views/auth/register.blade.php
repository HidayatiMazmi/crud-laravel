@extends('layouts.layout_login')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="wrapper-page">

                    <div class="m-t-40 card-box">
                        <div class="text-center">
                            <h2 class="text-uppercase m-t-0 m-b-30">
                                <a href="index.html" class="text-success">
                                    <span><img src="assets/images/logo_dark.png" alt="" height="30"></span>
                                </a>
                            </h2>
                            <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                        </div>
                        <div class="account-content">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label for="first_name">First Name</label>
                                        <input class="form-control @error('firstname') is-invalid @enderror" type="text" id="first_name" name="first_name" required="" placeholder="First Name" autocomplete="first_name" autofocus>

                                        @error('firstname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label for="last_name">Last Name</label>
                                        <input class="form-control @error('last_name') is-invalid @enderror" type="text" id="last_name" name="last_name" required="" placeholder="Last Name" autocomplete="last_name">

                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label for="username">Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" id="username" name="username" required="" placeholder="Username" autocomplete="username">

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label for="email">Email address</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" required="" placeholder="email@example.com" autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label for="password">Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" required="" id="password" name="password" placeholder="Enter your password" autocomplete="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group m-b-20">
                                    <div class="col-xs-12">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input class="form-control @error('password-confirm') is-invalid @enderror" type="password" required="" id="password-confirm" name="password_confirmation" placeholder="Enter your password" autocomplete="password">

                                        @error('password-confirm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group account-btn text-center m-t-10">
                                    <div class="col-xs-12">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                                    </div>
                                </div>

                            </form>

                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- end card-box-->


                    <div class="row m-t-50">
                        <div class="col-sm-12 text-center">
                            <p class="text-muted">Already have an account?  <a href="{{ route('login') }}" class="text-dark m-l-5">Sign In</a></p>
                        </div>
                    </div>

                </div>
                <!-- end wrapper -->

            </div>
        </div>
    </div>
</section>
@endsection
