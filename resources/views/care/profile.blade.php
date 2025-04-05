@extends('care.main')
@section('content')
<section class="" style="background-color: #5f59f7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
            <div class="col col-xl-10">

                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-8">

                                <h3 class="mb-3">{{$user->first_name}} {{$user->last_name}}</h3>
                            </div>
                            <div class="col-4">
                                <div class="text-right">
                                    <a href="" class="btn btn-outline-info btn-sm" data-toggle="modal"
                                        data-target="#editModal">Edit Profile</a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                        aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content text-left">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Profile</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <form method="post" action="{{route('care.profile_update')}}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="form-group my-1 col-md-6">
                                                                    <label for="first_name">First Name</label>
                                                                    <input type="text" name="first_name" id="first_name"
                                                                        class="form-control"
                                                                        value="{{$user->first_name}}">
                                                                </div>
                                                                <div class="form-group my-1 col-md-6">
                                                                    <label for="last_name">Last Name</label>
                                                                    <input type="text" name="last_name" id="last_name"
                                                                        class="form-control"
                                                                        value="{{$user->last_name}}">
                                                                </div>
                                                                <div class="form-group my-1 col-md-12">
                                                                    <label for="email">Last Name</label>
                                                                    <input type="text" name="email" id="email"
                                                                        class="form-control" value="{{$user->email}}">
                                                                </div>
                                                                <div class="form-group my-1 col-md-8">
                                                                    <label for="address">Address</label>
                                                                    <input type="text" name="address" id="address"
                                                                        class="form-control"
                                                                        value="{{$user->client->address}}">
                                                                </div>

                                                                <div class="form-group my-1 col-md-4">
                                                                    <label for="phone">Phone</label>
                                                                    <input type="text" name="phone" id="phone"
                                                                        class="form-control" value="{{$user->phone}}">
                                                                </div>

                                                                <div class="form-group my-1 col-md-12">
                                                                    <label for="address">Requirements</label>
                                                                    <textarea name="requirements" id="requirements"
                                                                        rows="3" class="form-control"
                                                                        placeholder="Services, Driver, Nursing, etc...">{{$user->client->requirements}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{route('logout')}}" class="btn btn-outline-dark btn-sm">Logout</a>
                                </div>
                            </div>
                        </div>
                        <p class="small mb-0"><i class="fas fa-user fa-lg text-dark"></i> <span class="mx-2">|</span>
                            {{$user->client->address ?? 'Address N/A'}} <span class="mx-2">|</span> Created on
                            {{$user->created_at}}.
                        </p>
                        <hr class="my-3">

                        <div class="d-flex justify-content-start align-items-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="mb-2">Requests</h5>
                                    <ul style="list-style-type: none;">
                                        @foreach ($jobs as $job)

                                        <li>
                                            <p class=" mb-0">
                                                <a data-toggle="modal" data-target="#requestModal{{$job->id}}"
                                                    class="text-primary">Request #{{$job->id}} </a> <span
                                                    class="mx-2">|</span>
                                                {{$job->created_at}}.
                                                <span class="mx-2">|</span> Status: {{$job->status}}
                                                @if ($job->status == 'hired')
                                                <i class="fa fa-check text-success"></i>
                                                @endif
                                                {{-- check if job where assigned to caregivers --}}
                                                @if ($job->caregivers->count() > 0)
                                                | <a href="" data-toggle="modal"
                                                    data-target="#caregiversModal{{$job->id}}" style="font-size: small">
                                                    Assigned Caregivers
                                                </a>
                                                @endif
                                            </p>
                                            <div class="modal fade" id="caregiversModal{{$job->id}}" tabindex="-1"
                                                role="dialog" aria-labelledby="caregiversModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content text-left">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="caregiversModalLabel">Request
                                                                #{{$job->id}} Assigned Caregivers
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                @foreach ($job->caregivers as $caregiver)
                                                                <ul style="list-style-type: none;">
                                                                    <li>
                                                                        <a
                                                                            href="{{route('care.staff.profile', $caregiver->id)}}">
                                                                            {{$caregiver->user->first_name}}
                                                                            {{$caregiver->user->last_name}}
                                                                        </a>
                                                                        |
                                                                        {{$caregiver->user->phone}}
                                                                        {{'Reviews'}}
                                                                    </li>
                                                                </ul>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="requestModal{{$job->id}}" tabindex="-1"
                                                role="dialog" aria-labelledby="requestModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content text-left">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="requestModalLabel">Request
                                                                #{{$job->id}}
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Service Descirption</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            {{$job->description}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Location</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">
                                                                            {{$job->location}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Date</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">From
                                                                            {{$job->start_date}} to {{$job->end_date
                                                                            ??
                                                                            'N/A'}}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Requested Services</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        @foreach ($job->services as $service)
                                                                        <p class="text-muted mb-0">
                                                                            {{$loop->iteration}}- {{$service->name}}
                                                                        </p>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="" class="btn btn-danger">Cancel
                                                                    Request</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr class="my-3">
                        <div class="d-flex justify-content-start align-items-center">
                            <a href="" data-toggle="modal" data-target="#editModal">

                                <p class="mb-0 text-uppercase"><i class="fas fa-cog me-2"></i> <span
                                        class="text-muted small">edit profile</span></p>
                            </a>
                            <a href="{{route('care.request_service')}}">
                                <p class="mb-0 text-uppercase">
                                    <i class="fas fa-hand-holding-hand ms-4 me-2 m-1"></i> <span
                                        class="text-muted small">
                                        Request Service
                                    </span>
                                </p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection