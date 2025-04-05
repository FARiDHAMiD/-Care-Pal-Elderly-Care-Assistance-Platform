@extends('admin.app')
@section('admin.content')
<div class="container-fluid">
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Admins List ({{$admins->count()}})</h6>
                </div>
                <div class="col-6 text-right">
                    <a href="{{ route('admins.create') }}" class="btn btn-info btn-sm">
                        <i class="fas fa-plus"></i> Add new User
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($admins as $user)
                        @php $user_profile = $user->user_profile; @endphp
                        <tr>
                            <td>
                                {{ $user->first_name }} {{ $user->last_name }}
                            </td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->Role->dispaly_name ?? ''}}</td>
                            <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
                            <td>
                                @if($user->id != 1)
                                <a href="{{ route('admins.edit', $user->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <form method="post" class="d-inline"
                                    action="{{ route('admins.destroy', $user->id) }}">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Are you sure you want to delete this?')"
                                        class="btn btn-danger btn-sm" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                @endif
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