@extends('care.main')
@section('content')

<section class="" style="background-color: #5f59f7;">
    <div class="container py-5 mb-5">
        <form action="{{route('care.staff_profile.update')}}" method="POST">
            @csrf
            <div class="row my-5">
                <div class="col-md-8">
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-light" for="first_name">First Name</label>
                            <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-light" for="lname">Last Name</label>
                            <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control"
                                required>

                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-6">
                            <label class="text-light" for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-light" for="phone">Phone</label>
                            <input name="phone" id="phone" value="{{$user->phone}}" class="form-control" required>

                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-light" for="phone">Title</label>
                            <input name="title" id="title" class="form-control" required
                                placeholder="ex. Personal Aide, Medical Assistant" value="{{$profile->title}}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label for="gender" class="text-light">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="">---</option>
                                <option value="male" {{$profile->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{$profile->gender == 'female' ? 'selected' : '' }}>Female
                                </option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label for="location" class="text-light">Location</label>
                            <input type="text" name="location" id="location" class="form-control"
                                value="{{$profile->location}}" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="text-light" for="subject">Date of birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                                value="{{$profile->date_of_birth}}" required>
                        </div>
                        <div class="col-md-4">
                            <label class="text-light" for="subject">Experience Years</label>
                            <input type="number" name="experience_years" id="experience_years" min="0"
                                value="{{$profile->experience_years}}" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="text-light" for="subject">Hourly Rate</label>
                            <input type="number" name="hourly_rate" id="hourly_rate" value="{{$profile->hourly_rate}}"
                                min="0" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-4">
                            <label class="text-light" for="subject">Availability</label>
                            <select name="availability" id="availability" class="form-control">
                                <option value="full-time" selected>Full Time</option>
                                <option value="part-time">Part Time</option>
                                <option value="weekends">Weekends</option>
                                <option value="nightshifts">Nightshifts</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label class="text-light" for="subject">Certifications</label>
                            <input type="text" name="certifications" id="certifications"
                                value="{{$profile->certifications}}" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-light" for="subject">About Yourself</label>
                            <textarea name="bio" id="bio" rows="2" class="form-control">
                                {{$profile->bio}}
                            </textarea>
                        </div>

                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="image" class="text-light">Personal Photo</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Save Updates" class="btn btn-primary text-white">
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="services" class="text-light">Services I Can Provide</label>
                        <div class="card card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="service1">
                                <label class="form-check-label" for="service1">
                                    Personal Care Assistance
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="service2">
                                <label class="form-check-label" for="service2">
                                    Medication Management
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="service3">
                                <label class="form-check-label" for="service3">
                                    Meal Preparation & Nutrition
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="service4">
                                <label class="form-check-label" for="service4">
                                    Companionship & Emotional Support
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="service5">
                                <label class="form-check-label" for="service5">
                                    Housekeeping & Home Assistance
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="service6">
                                <label class="form-check-label" for="service6">
                                    Transportation Services
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="service7">
                                <label class="form-check-label" for="service7">
                                    Specialized Care (if applicable)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection