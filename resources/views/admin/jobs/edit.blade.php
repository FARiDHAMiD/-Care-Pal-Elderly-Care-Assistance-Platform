@extends('admin.app')
@section('admin.content')
<style>
    ul {
        list-style-type: none;
    }
</style>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Job Request Details</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="my-2 col-md-6">
                    <label for="">Client:</label>
                    <h4>
                        <a target="_blank" href="{{route('admin.client_profile', $job->client->user->id)}}">
                            {{$job->client->user->first_name}} {{$job->client->user->last_name}}</a>
                    </h4>
                </div>
                <div class="my-2 col-md-6">
                    <label for="">Phone:</label>
                    <h4>
                        {{$job->client->user->phone}}
                    </h4>
                </div>
                <hr class="my-5">
                <div class="my-2 col-md-3">
                    <label for="">Job Description</label>
                </div>
                <div class="my-2 col-md-9">
                    <p>{{$job->description}}</p>
                </div>

                <div class="my-2 col-md-3">
                    <label for="">Requested Services</label>
                </div>
                <div class="my-2 col-md-9 m-0">
                    <ul>
                        @foreach ($job->services as $service)
                        <li>{{ $loop->iteration }}- {{$service->name}}</li>
                        @endforeach

                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="my-2 col-md-3">
                    <label class="mb-0">Location</label>
                </div>
                <div class="my-2 col-md-9">
                    <p class="text-muted mb-0">{{$job->location}}</p>
                </div>

                <div class="my-2 col-md-3">
                    <label class="mb-0">Start Date</label>
                </div>
                <div class="my-2 col-md-3">
                    <p class="text-muted mb-0">{{$job->start_date}}</p>
                </div>
                <div class="my-2 col-md-3">
                    <label class="mb-0">End Date</label>
                </div>
                <div class="my-2 col-md-3">
                    <p class="text-muted mb-0">{{$job->end_date ?? 'N/A'}}</p>
                </div>

                <div class="my-2 col-md-3">
                    <label class="mb-0">Job Type</label>
                </div>
                <div class="my-2 col-md-9">
                    <p class="text-muted mb-0">{{$job->job_type}}</p>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Process Request</h6>
            </div>
            <form action="{{ route('jobs.update', $job->id) }}" class="mb-5" method="post">
                @method('put')
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="my-2 col-md-12">
                            <label for="">Assign Caregiver/s <span class="text-sm text-muted">(Choose One or
                                    more)</span></label>
                            <select class="form-control" name="caregivers[]" multiple
                                aria-label="multiple select example">
                                @foreach ($caregivers as $user)
                                <option value="{{$user->caregiver->id}}" {{ in_array($user->id,
                                    $job->caregivers->pluck('id')->toArray()) ? 'selected' : '' }}>
                                    {{$user->first_name}} {{$user->last_name}} |
                                    {{$user->caregiver->location}} | {{$user->phone}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-2 col-md-12">
                            <label for="status">Job Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="open" {{$job->status == 'open' ? 'selected' : ''}}>Open</option>
                                <option value="hired" {{$job->status == 'hired' ? 'selected' : ''}}>hired</option>
                                <option value="closed" {{$job->status == 'closed' ? 'selected' : ''}}>Closed</option>
                            </select>
                        </div>
                        <div class="col-6 my-2">
                            <button type="submit" class="btn btn-success">Update Request</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection