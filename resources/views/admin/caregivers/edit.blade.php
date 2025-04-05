@extends('admin.app')
@section('admin.content')
<div class="container-fluid">
    <form enctype="multipart/form-data" action="{{ route('services.update', $service->id) }}" class="mb-5"
        method="post">
        @method('put')
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Service Details</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="text-dark"><strong>Servce Name</strong></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror "
                                value="{{ $service->name }}">
                            @error('name')
                            <span role="alert" class="invalid-feedback">( {{ $message }} )</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="text-dark"><strong>Description</strong></label>
                            <textarea name="description" id="description" rows="5" class="form-control">
                                    {{ $service->description }}
                                </textarea>
                            @error('description')
                            <span role="alert" class="invalid-feedback">( {{ $message }} )</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info  w-100">
                            <i class="fas fa-save"></i> save
                        </button>
                    </div>
                </div>
            </div>
    </form>
</div>
@endsection