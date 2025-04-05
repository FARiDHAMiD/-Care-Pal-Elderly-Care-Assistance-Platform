@extends('admin.app')
@section('admin.content')
<div class="container-fluid">
    <form action="{{ route('services.store') }}" class="mb-5" method="post" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Service</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="text-dark"><strong>Name</strong></label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror "
                                value="{{ old('name') }}">
                            @error('name')
                            <span role="alert" class="invalid-feedback">( {{ $message }} )</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 my-2">
                        <label class="text-dark"><strong>Description</strong></label>
                        <textarea name="description" id="description"
                            class="form-control">{{ old('description') }}</textarea>
                        @error('description')
                        <span role="alert" class="invalid-feedback">( {{ $message }} )</span>
                        @enderror
                    </div>
                    <div class="col-md-12 my-2">
                        <label for="price" class="text-dark">Price <span class="text-muted">(EGP)</span></label>
                        <input type="number" name="price" id="price" class="form-control">
                    </div>
                    <div class="align-items-center">
                        <div class="text-center">
                            <div class="mt-4">
                                <input type="file" id="service_image" name="service_image" accept="image/*" hidden
                                    class="form-control my-2">
                                <div id="imagePreviewContainer">
                                    <img height="150px" id="imagePreview"
                                        src="{{asset('/elder/images/service_avatar.png')}}"
                                        alt="Image Preview" style="max-width: 200px;">
                                </div>
                                <label for="service_image" class="btn btn-info py-2 my-2">
                                    Upload Image
                                </label>
                                @error('service_image')
                                <span role="alert" class="invalid-feedback">( {{ $message }} )</span>
                                @enderror
                            </div>
                        </div>
                    </div>

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
    </form>
</div>

{{-- Change photo when upload --}}
<script>
    document.getElementById('service_image').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function () {
                const preview = document.getElementById('imagePreview');
                preview.src = reader.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection