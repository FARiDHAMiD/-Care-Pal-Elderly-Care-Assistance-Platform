@extends('care.main')
@section('content')
<!-- Register section start -->
<div class="site-section" style="background-image: url('{{url('/elder')}}/images/lightnavy.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="d-flex justify-content-center">

                        <div class="details text-center col-8">

                            <!-- Name -->
                            <h1 class="form-title text-center text-light my-3">Your Trusted Companion in Care</h1>


                            <!-- Form start -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">

                                            <input required id="first_name" type="text" name="first_name"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                placeholder="First Name" value="{{ old('first_name') }}">
                                            @error('first_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">

                                            <input required id="last_name" type="text" name="last_name"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                placeholder="Last Name" value="{{ old('last_name') }}">
                                            @error('last_name')
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <input required id="email" type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email Address" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">

                                    <input required id="password" type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">

                                    <input id="password_confirmation" type="password" name="password_confirmation"
                                        class="form-control" placeholder="Confirm Password">
                                </div>


                                <div class="my-2 d-flex justify-content-center">
                                    {!!htmlFormSnippet()!!}
                                    @error('g-recaptcha-response')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary w-100">Create my
                                        account</button>
                                </div>
                                {{-- <div class="my-4">
                                    <p class="overline-line"><span class="overline-word">OR</span></p>
                                </div>
                                <div class="form-group mb-0 btn-with-image-box">
                                    <img src="{{ url('/website') }}/img/google-icon.png" alt="Google Icon">
                                    <button type="submit" class="btn-md btn text-dark btn-block">Register with
                                        Gmail</button>
                                </div> --}}
                                <div class="mt-3">
                                    <p class="text-center">
                                        Already have an account?
                                        <a href="{{route('login_page')}}">Log in </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <!-- Footer -->
                        {{-- <div class="footer text-sm">
                            <span>Looking to post jobs? <a href="employer/login.html">Create an Employer
                                    Account</a></span>
                        </div> --}}
                    </div>
                    <!-- Form content box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Register section end -->
    @endsection