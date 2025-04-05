@extends('care.main')
@section('content')

<section class="" style="background-color: #5f59f7;">
    <div class="container py-5 mb-5">
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{url('elder/images/staff_1.jpg')}}" alt="avatar" class="rounded-circle img-fluid"
                            style="width: 150px;">
                        <h5 class="my-3">{{$user->first_name}} {{$user->last_name}}</h5>
                        <p class="text-muted mb-1">{{$user->caregiver->title}}</p>
                        <p class="text-muted mb-4">{{$user->location}}</p>
                        <p class="text-muted mb-4"><i class="fas fa-star text-warning"></i> 4.9
                            <span class="text-muted">(18 Reviwes)</span>
                        </p>
                        <p>
                            <a href="{{route('care.staff_profile.edit')}}" class="btn btn-outline-info m-1"
                                style="width: 50%">Edit Profile</a>
                            <a href="{{route('logout')}}" class="btn btn-outline-dark m-1" style="width: 50%">Logout</a>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Contact</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->phone}} | {{$user->email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Age</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    {{\Carbon\Carbon::parse($user->caregiver->date_of_birth)->age}} Years
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Experience</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->caregiver->experience_years}} Years</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Availability</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->caregiver->availability}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Hourly Rate</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->caregiver->hourly_rate}} Hrs</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Bio</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->caregiver->bio}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">Requests</span>
                                    Project
                                    Status
                                </p>
                                <p class="mb-1" style="font-size: .77rem;">Care Meditation</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Home Markup</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Day Task</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Help</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection