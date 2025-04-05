@extends('admin.app')
@section('admin.content')
<div class="container-fluid">
    {{-- start filter --}}
    <style>
        #search-form input,
        #search-form select {
            color: #000;
            font-weight: bold;
        }

        .filter-sec {
            border: 1px solid #b4c1e5;
            border-bottom: 2px solid #476dda;
            border-radius: 0;
        }

        .b-sharp {
            border-radius: 0;
        }
    </style>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Caregivers List ({{$caregivers->count()}})</h6>
                </div>
                <div class="col-6 text-right">
                    <a href="{{route('caregivers.create')}}" class="btn btn-info btn-sm">
                        <i class="fas fa-plus"></i> Add New Caregiver
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Exp. Yrs</th>
                            <th>Location</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($caregivers as $user)
                        @php $profile = $user->caregiver; @endphp
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->first_name}} {{$user->last_name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$profile->date_of_birth}}</td>
                            <td>{{$profile->gender}}</td>
                            <td>{{$profile->experience_years}}</td>
                            <td>{{$profile->location}}</td>
                            <td>
                                @if ($profile->active)

                                <a href="{{route('caregiver.deactivate', $user->id)}}"
                                    class="btn btn-outline-success btn-sm">
                                    <i class="fas fa-check text-success"></i>
                                </a>
                                @else
                                <a href="{{route('caregiver.activate', $user->id)}}"
                                    class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-ban"></i>
                                </a>
                                @endif
                            </td>

                            <td>
                                <form method="post" action="{{route('caregivers.destroy', $user->id)}}">
                                    <a href="{{route('caregivers.edit', $user->id)}}"
                                        class="btn btn-sm btn-outline-info m-1">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Are you sure you want to delete this?')"
                                        class="btn btn-danger btn-sm m-1" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection