@extends('admin.layout')
@push('css')
 
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
 
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"> <a href="{{ route('websites.index') }}" class="btn btn-info btn-sm"><i class="bx bx-arrow-back me-1"></i></a> {{ $title }}</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('websites.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <div class="col-sm-6">
                <label class="form-label">Name  <span class="required">*</span> </label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter Name" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label">URL <span class="required">*</span></label>
                <input type="text" name="url" class="form-control" value="{{ old('url') }}" placeholder="Enter Url" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Email <span class="required">*</span></label>
                <input type="text" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter Email" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Phone <span class="required">*</span></label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" placeholder="Enter Phone" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Address <span class="required">*</span></label>
                <textarea name="address" class="form-control" placeholder="Enter Address" required>{{ old('address') }}</textarea>
              </div>
              <div class="col-sm-6">
                <label>Logo <span class="required">*</span></label>
                <input type="file" class="form-control" name="logo" />
              </div>
            </div>
            <button type="submit" style="float: right;" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@push('js')

@endpush
