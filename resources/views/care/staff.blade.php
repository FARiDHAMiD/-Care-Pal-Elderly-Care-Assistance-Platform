@extends('care.main')
@section('content')

<div class="slide-item" style="background-image: url('/elder/images/grey.jpg')">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6 align-self-center">
                <h1 class="heading mb-3">Our Awesome Staff</h1>
                <p class="lead text-white mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum totam
                    alias
                    iusto?</p>
                <a href="{{route('care.request_service')}}" class="btn btn-primary m-1" style="width: 200px">Request
                    Service</a>
                <a href="{{route('care.request_join')}}" class="btn btn-primary m-1" style="width: 200px">Join Our
                    Caregivers</a>
            </div>
        </div>
    </div>
</div>
<div class="site-section">

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-12 align-self-center">
                <div class="site-section">
                    <div class="container">
                        <div class="row justify-content-center mb-2">
                            <div class="col-lg-12 text-center mx-auto">
                                <h2 class="heading mb-3">Our Awesome Team</h2>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis
                                    fuga quas ut
                                    molestiae totam porro
                                    explicabo! Aliquid iure, ullam commodi.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="{{route('care.staff.profile', '123')}}">
                                    <div class="team text-center">
                                        <img src="{{url('/elder')}}/images/staff_1.jpg" alt="" class="img-fluid">
                                        <h3 class="text-light">Jean Smith</h3>
                                        <span class="position d-block text-black">Personal Care Aide</span>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Non saepe voluptas
                                            distinctio.</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <a href="">
                                    <div class="team text-center">
                                        <img src="{{url('/elder')}}/images/staff_2.jpg" alt="" class="img-fluid">
                                        <h3 class="text-light">Myla Anderson</h3>
                                        <span class="position d-block text-black">Licensed Practical Nurse</span>
                                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                            Sapiente alias aut
                                            cum?
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3">
                                <div class="team text-center">
                                    <img src="{{url('/elder')}}/images/staff_3.jpg" alt="" class="img-fluid">
                                    <h3 class="text-light">Cathy Jackson</h3>
                                    <span class="position d-block text-black">Assisted Living Caregiver</span>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius
                                        ducimus est
                                        facere?</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="team text-center">
                                    <img src="{{url('/elder')}}/images/staff_4.jpg" alt="" class="img-fluid">
                                    <h3 class="text-light">Mellissa Gold</h3>
                                    <span class="position d-block text-black">Respite Care Provider</span>
                                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum
                                        quos voluptatibus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection