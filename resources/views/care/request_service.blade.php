@extends('care.main')
@section('content')

<div class="slide-item overlay" style="background-image: url('/elder/images/staff_5.jpg')">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 align-self-center">
                <h1 class="heading mb-3">Choose One or more service</h1>
                <p class="lead text-white">Our Team will recommend you best caregivers to choose among.</p>
            </div>
        </div>
    </div>
</div>



<div class="site-section">
    <div class="container">
        <h2>Welcome Back, {{auth()->user()->first_name}}!</h2>
        <div class="row">
            <div class="col-lg-12 mb-5">
                <form action="{{route('care.request_service.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="">
                                <label for="services" class="text-black">Choose One Or More Service
                                    <a href="{{route('care.services')}}">
                                        <span class="text-primary" style="font-size: small">(Services Details)</span>
                                    </a>
                                </label>
                                <div class="card card-body">
                                    @foreach ($services as $service)
                                    <div class="form-check">
                                        <input class="form-check-input" name="services[]" type="checkbox"
                                            value="{{$service->id}}" id="service{{$service->id}}">
                                        <label class="form-check-label" for="service{{$service->id}}">
                                            {{$service->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="start_date" class="text-black">Start Date & Time</label>
                                    <div class="">
                                        <input type="date" name="start_date" id="start_date" class="form-control"
                                            required>
                                    </div>
                                    <br>
                                    <label for="end_date" class="text-black">End Date & Time</label>
                                    <div class="">
                                        <input type="date" name="end_date" id="end_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 my-1">
                                    <label for="description" class="text-black">Service Description</label>
                                    <textarea name="description" id="description" rows="2" class="form-control"
                                        required></textarea>

                                </div>
                                <div class="col-md-12 my-1">
                                    <label for="location" class="text-black">Detailed Address</label>
                                    <input type="text" name="location" id="location"
                                        placeholder="building no., Street, Area, City." required class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group my-2 text-center">
                        <input type="submit" value="Submit Request" class="btn btn-primary text-white">
                        <div class="col-md-12">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection