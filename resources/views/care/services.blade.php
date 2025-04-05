@extends('care.main')
@section('content')
<style>
    .img-fluid{
        max-height: 150;
        min-height: 150;
    }
</style>
{{-- Special Care Section --}}
<div class="site-section" style="background-image: url('/elder/images/navy.jpg')">
    <div class="container">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-12 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-3 my-2">
                <div class="service">
                    <a href="{{route('care.request_service')}}" class="d-block">
                        <img src="{{ empty($service->getFirstMedia('service_image')) ? asset('/elder/images/service_avatar.png') : $service->getFirstMedia('service_image')->getUrl() }}"
                            alt="Image" class="img-fluid"></a>
                    <div class="service-inner">
                        <h3>{{$service->name}}</h3>
                        <p>
                            {{mb_substr($service->description, 0, 150)}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Try Our Services --}}
<div class="site-section">
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

@endsection