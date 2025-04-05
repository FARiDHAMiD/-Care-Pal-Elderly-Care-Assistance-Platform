@extends('care.main')
@section('content')
<!-- Login section start -->
<div class="site-section" style="background-image: url('{{url('/elder')}}/images/lightnavy.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="d-flex justify-content-center">

                        <div class="details text-center col-6">

                            <!-- Name -->
                            <h1 class="form-title text-center text-light">Log in to your account</h1>

                            <!-- Form start -->
                            @error('login_error')
                            <div class="text-danger text-center mb-4">
                                {{ $message }}
                            </div>
                            @enderror
                            <form form method="POST" action="{{ route('login') }}">

                                @csrf

                                <div class="row form-group my-2">

                                    <input id="email" type="email" id="email" name="email" class="form-control"
                                        placeholder="Email Address" value="{{ old('email') }}">
                                </div>
                                <div class="row form-group">
                                    <input id="password" type="password" name="password" class="form-control"
                                        placeholder="Password">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary w-100 my-2">login</button>
                                </div>
                                <a href="{{route('forget_password')}}" class="link-not-important pull-right">Forgot
                                    Password?</a>
                            </form>
                            <!-- Footer -->
                            <div class="footer">
                                <span class="text-light">Don't have an account? <a
                                        href="{{route('register_page')}}">Register
                                        here</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Login section end -->
@endsection