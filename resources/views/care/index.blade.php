@extends('care.main')
@section('content')

<!-- Care Pal Index -->
<div class="slide-item overlay" style="background-image: url('/elder/images/slider-1.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <h1 class="heading mb-3">Expert Care for the Elderly</h1>
                <p class="lead text-white mb-5">Where compassionate caregivers are dedicated to providing the best care
                    for you and your loved ones.</p>
                <p>
                    @auth
                    <a href="{{route('care.request_service')}}" class="btn btn-primary m-1" style="width: 200px">Request
                        Service</a>
                    @else
                    <a href="{{route('login')}}" class="btn btn-primary m-1" style="width: 200px">Request
                        Service</a>
                    @endauth
                    <a href="{{route('care.request_join')}}" class="btn btn-primary m-1" style="width: 200px">Join Our
                        Caregivers</a>
                </p>
            </div>
        </div>
    </div>
</div>

{{-- Try Our Services --}}
<div class="feature-v1">
    <div class="d-lg-flex align-items-center w-100">
        <div class="d-flex pagination-item  h-100">
            <span class="icon-wrap">
                <img src="{{url('/elder')}}/images/svg/svg/001-elderly.svg" alt="Image" class="img-fluid">
            </span>
            <div>
                <span class="subheading">Try Our Services</span>
                <h3 class="heading">Independent Living For Senior Couples</h3>
                <a href="#" class="small">Learn More</a>
            </div>
        </div>
        <div class="d-flex pagination-item h-100">
            <span class="icon-wrap">
                <img src="{{url('/elder')}}/images/svg/svg/002-elderly-1.svg" alt="Image" class="img-fluid">
            </span>
            <div>
                <span class="subheading">Try Our Services</span>
                <h3 class="heading">We Are Helping the Senior Elderly People</h3>
                <a href="#" class="small">Learn More</a>
            </div>
        </div>
        <div class="d-flex pagination-item h-100">
            <span class="icon-wrap">
                <img src="{{url('/elder')}}/images/svg/svg/003-rocking-chair.svg" alt="Image" class="img-fluid">
            </span>
            <div>
                <span class="subheading">Try Our Services</span>
                <h3 class="heading">Senior Home Patient Care Services</h3>
                <a href="#" class="small">Learn More</a>
            </div>
        </div>
    </div>
</div>

{{-- Special Care Section --}}
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="service">
                    <a href="#" class="d-block"><img src="{{url('/elder')}}/images/img_4_sq.jpg" alt="Image"
                            class="img-fluid"></a>
                    <div class="service-inner">
                        <h3>Personal Care Assistance</h3>
                        <p>Helping clients with daily activities such as bathing, dressing, grooming, toileting, and
                            mobility support to ensure dignity and comfort.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="service">
                    <a href="#" class="d-block"><img src="{{url('/elder')}}/images/img_1_sq.jpg" alt="Image"
                            class="img-fluid"></a>
                    <div class="service-inner">
                        <h3>Medication Management</h3>
                        <p>Providing medication reminders, assisting with prescriptions, and monitoring for side effects
                            to ensure proper health management.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="service">
                    <a href="#" class="d-block"><img src="{{url('/elder')}}/images/img_2_sq.jpg" alt="Image"
                            class="img-fluid"></a>
                    <div class="service-inner">
                        <h3>Meal Preparation & Nutrition</h3>
                        <p>Preparing healthy meals based on dietary needs, assisting with feeding if necessary, and
                            ensuring proper hydration.</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3">
                <div class="service">
                    <a href="#" class="d-block"><img src="{{url('/elder')}}/images/img_3_sq.jpg" alt="Image"
                            class="img-fluid"></a>
                    <div class="service-inner">
                        <h3>Companionship & Emotional Support</h3>
                        <p>Engaging in conversation, playing games, accompanying clients to appointments, and providing
                            emotional care to combat loneliness and isolation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Counters --}}
<div class="site-section bg-primary count-numbers">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter-wrap text-center">
                    <strong class="counter d-block"><span class="number" data-number="5890"></span></strong>
                    <span>Rooms Available</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter-wrap text-center">
                    <strong class="counter d-block"><span class="number" data-number="530"></span></strong>
                    <span>Nurse Staff</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter-wrap text-center">
                    <strong class="counter d-block"><span class="number" data-number="4029"></span></strong>
                    <span>Senior Living</span>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="counter-wrap text-center">
                    <strong class="counter d-block"><span class="number" data-number="7020"></span></strong>
                    <span>Happy People</span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Title with photo Section --}}
<div class="site-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7">
                <div class="section-heading">
                    <h2 class="heading mb-3">Senior Care Center is for Your Family</h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore
                        perspiciatis deleniti, maiores quia aliquam, odit iure aspernatur voluptate delectus
                        ipsa.</p>

                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{url('/elder')}}/images/img_3.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled ul-check primary">
                                <li>Consectetur adipisicing elit</li>
                                <li>Voluptate delectus ipsa</li>
                                <li>Maiores quia aliquam</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">

                <div class="d-block custom-media algin-items-stretch">
                    <div class="text text-center">
                        <h3>You can live here with love</h3>
                    </div>
                    <div class="img-bg" style="background-image: url('{{url('/elder')}}/images/img_2.jpg')">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Cover Section --}}
<div class="cover overlay" style="background-image: url('/elder/images/slider-2.jpg')">
    <div class="container">
        <div class="row ">
            <div class="col-lg-7 mx-auto text-center align-self-center">
                <h1 class="mb-5 heading">Our Goal is to Make Your Life Better</h1>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="feature">
                            <span class="img-wrap">
                                <img src="{{url('/elder')}}/images/svg/svg/006-elderly-3.svg" alt="Image"
                                    class="img-fluid">
                            </span>
                            <h3>Expert Nursing Staff</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature">
                            <span class="img-wrap">
                                <img src="{{url('/elder')}}/images/svg/svg/005-elderly-2.svg" alt="Image"
                                    class="img-fluid">
                            </span>
                            <h3>Expert Nursing Staff</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature">
                            <span class="img-wrap">
                                <img src="{{url('/elder')}}/images/svg/svg/004-nurse.svg" alt="Image" class="img-fluid">
                            </span>
                            <h3>Expert Nursing Staff</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Testmonials Section --}}
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="testimonial text-center">
                    <img src="{{url('elder')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                            repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="testimonial text-center">
                    <img src="{{url('/elder')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                            repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="testimonial text-center">
                    <img src="{{url('/elder')}}/images/person_1.jpg" alt="Image" class="img-fluid">
                    <blockquote>
                        <p class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo
                            repellendus nihil qui iure animi maxime consequuntur aliquid sed tempore, amet!</p>
                        <cite class="author">Elizabeth Anderson, Senior</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Other Opportunities Section --}}
<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-7 text-center">
                <div class="heading">
                    <h2 class="text-black">Other Opportunities</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, culpa.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="d-block d-flex custom-media algin-items-stretch">
                    <div class="text text-left">
                        <h3>You can live here with love</h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, commodi.
                        </p>
                        <p><a href="#" class="btn btn-outline-white">Learn More</a></p>
                    </div>
                    <div class="img-bg" style="background-image: url('{{url('/elder')}}/images/img_2.jpg')">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="d-block d-flex custom-media algin-items-stretch">
                    <div class="text text-left">
                        <h3>You can live here with love</h3>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, commodi.
                        </p>
                        <p><a href="#" class="btn btn-outline-white">Learn More</a></p>
                    </div>
                    <div class="img-bg" style="background-image: url('{{url('/elder')}}/images/img_3.jpg')">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Care Center / About Us Section --}}
<div class="site-section bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-5 mb-md-0">
                <img src="{{url('/elder')}}/images/about.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-5 ml-auto">
                <div class="section-heading">
                    <h2 class="heading mb-3 text-white">Senior &amp; Elder Home Care Center</h2>

                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique
                        amet nostrum facere hic! Inventore cumque ipsam eum, sit sequi illum.</p>
                    <p class="mb-4 text-white">Optio ex ullam eveniet magnam molestiae laborum, dignissimos
                        dolorum ipsam minus, ipsum vel illo aut molestias suscipit voluptatem hic voluptatibus!
                    </p>
                    <p class="text-white mb-5"><strong class="h3">&ldquo;We care for elderly
                            people&rdquo;</strong></p>
                    <p><a href="#" class="btn btn-white">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- News & Updates Section --}}
<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-7 text-center">
                <div class="heading">
                    <h2 class="text-black">News &amp; Updates</h2>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, culpa.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="blog-entry">
                    <a href="#" class="d-block">
                        <img src="{{url('/elder')}}/images/img_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-meta d-flex justify-content-center">
                        <span>
                            <span class="icon-calendar"></span>
                            <span>23 Jul</span>
                        </span>
                        <span>
                            <span class="icon-user"></span>
                            <span>Admin</span>
                        </span>
                        <span>
                            <span class="icon-comment"></span>
                            <span>2 Comments</span>
                        </span>
                    </div>
                    <h2><a href="#">We're Providing the Quality Care</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-entry">
                    <a href="#" class="d-block">
                        <img src="{{url('/elder')}}/images/img_2.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-meta d-flex justify-content-center">
                        <span>
                            <span class="icon-calendar"></span>
                            <span>23 Jul</span>
                        </span>
                        <span>
                            <span class="icon-user"></span>
                            <span>Admin</span>
                        </span>
                        <span>
                            <span class="icon-comment"></span>
                            <span>2 Comments</span>
                        </span>
                    </div>
                    <h2><a href="#">We're Providing the Quality Care</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-entry">
                    <a href="#" class="d-block">
                        <img src="{{url('/elder')}}/images/img_3.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="post-meta d-flex justify-content-center">
                        <span>
                            <span class="icon-calendar"></span>
                            <span>23 Jul</span>
                        </span>
                        <span>
                            <span class="icon-user"></span>
                            <span>Admin</span>
                        </span>
                        <span>
                            <span class="icon-comment"></span>
                            <span>2 Comments</span>
                        </span>
                    </div>
                    <h2><a href="#">We're Providing the Quality Care</a></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, laudantium.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection