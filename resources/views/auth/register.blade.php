@extends('layouts.app')
@section('content')
<div class="row align-items-center">
    <div class="col-md-6 col-lg-5 offset-lg-1 mb-4 mb-md-0">
        <!-- Card -->
        <div class="card">
            <!-- Card Body -->
            <div class="card-body p-4 p-lg-7">
                <h2 class="text-center mb-4">Create account</h2>

                <!-- Create Account Form -->
                <form action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
                    <!-- Full Name -->
                    <div class="form-group">
                        <label for="name">Full name</label>
                        <input name="name" id="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Your full name" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- End Full Name -->

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Your email</label>
                        <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Your email" value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- End Email -->

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Enter your password">
                        @if($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- End Password -->

                    <!-- Password Confirmation -->
                    <div class="form-group">
                        <label for="password">Password Confirmation</label>
                        <input name="password_confirmation" id="password_confirmation" class="form-control" type="password" placeholder="Enter your password confirmation">
                    </div>
                    <!-- End Password Confirmation -->

                    <button type="submit" class="btn btn-block btn-wide btn-primary text-uppercase">Sing Up</button>

                    <p class="text-center mb-0">
                        Already have an account?
                        <a class="font-weight-semi-bold" href="account-sign-in.html">Login here</a>
                    </p>
                </form>
                <!-- End Create Account Form -->
            </div>
            <!-- End Card Body -->
        </div>
        <!-- End Card -->
    </div>

    <div class="col-md-6 col-lg-5 offset-lg-1">
        <h2 class="h1">Improve your business<br class="d-none d-md-block"> cards and&nbsp;enhance your&nbsp;sales</h2>
        <p class="font-weight-semi-bold text-primary mb-5">More then 30.000 clients</p>

        <!-- Benefits -->
        <ul class="list-unstyled mb-11">
            <!-- Benefit -->
            <li class="mb-4">
                <div class="media align-items-center">
                    <div class="u-icon u-icon-sm rounded-circle bg-white text-primary mr-3">
                        <span class="ti-lock"></span>
                    </div>

                    <div class="media-body">
                        <p class="text-dark mb-0">Businesses often become known today through effective marketing</p>
                    </div>
                </div>
            </li>
            <!-- End Benefit -->

            <!-- Benefit -->
            <li class="mb-4">
                <div class="media align-items-center">
                    <div class="u-icon u-icon-sm rounded-circle bg-white text-primary mr-3">
                        <span class="ti-briefcase"></span>
                    </div>

                    <div class="media-body">
                        <p class="text-dark mb-0">Marketers/advertisers usually focus their efforts on the people responsible for making</p>
                    </div>
                </div>
            </li>
            <!-- End Benefit -->

            <!-- Benefit -->
            <li class="mb-4">
                <div class="media align-items-center">
                    <div class="u-icon u-icon-sm rounded-circle bg-white text-primary mr-3">
                        <span class="ti-cup"></span>
                    </div>

                    <div class="media-body">
                        <p class="text-dark mb-0">You have finished building your own website. You have introduced your company</p>
                    </div>
                </div>
            </li>
            <!-- End Benefit -->
        </ul>
        <!-- End Benefits -->
    </div>
</div>
@endsection