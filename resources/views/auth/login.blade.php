@extends('layouts.app')

@section('content')
    <div class="row align-items-center">
        <div class="col-md-6 col-lg-5 offset-lg-1 mb-4 mb-md-0">
            <!-- Card -->
            <div class="card">
                <!-- Card Body -->
                <div class="card-body p-4 p-lg-7">
                    <h2 class="text-center mb-4">Sign in</h2>

                    <!-- Sign in Form -->
                    <form action="/">
                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="email" placeholder="Your email">
                        </div>
                        <!-- End Email -->

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="email" placeholder="Enter your password">
                        </div>
                        <!-- End Password -->

                        <div class="d-flex align-items-center justify-content-between my-4">
                            <!-- Remember -->
                            <div class="custom-control custom-checkbox">
                                <input id="rememberMe" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label text-dark" for="rememberMe">Remember me</label>
                            </div>
                            <!-- End Remember -->

                            <a class="font-weight-semi-bold" href="account-password-recover.html">Forgot password?</a>
                        </div>

                        <button type="submit" class="btn btn-block btn-wide btn-primary text-uppercase">Sing Up</button>

                        <p class="text-center mb-0">
                            Don’t have an account?
                            <a class="font-weight-semi-bold" href="account-sign-up.html">Sign up here</a>
                        </p>
                    </form>
                    <!-- End Sign in Form -->
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
