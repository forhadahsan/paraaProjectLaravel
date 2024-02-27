@extends('admin.layout')
@push('css')
 
@endpush
 
 
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <!-- <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"> <a href="{{ route('websites.index') }}" class="btn btn-info btn-sm"><i class="bx bx-arrow-back me-1"></i></a> {{ $title }}</h5>
        </div> -->
        <div class="card-body">
          <form action="{{ route('websites.update', $website->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="row mb-3">
              <div class="col-sm-6">
                <label class="form-label">Name  <span class="required">*</span> </label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $website->name) }}" placeholder="Enter Name" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label">URL <span class="required">*</span></label>
                <input type="text" name="url" class="form-control" value="{{ old('url', $website->url) }}" placeholder="Enter Url" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Email <span class="required">*</span></label>
                <input type="text" name="email" class="form-control" value="{{ old('email', $website->email) }}" placeholder="Enter Email" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Phone <span class="required">*</span></label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $website->phone) }}" placeholder="Enter Phone" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Address <span class="required">*</span></label>
                <textarea name="address" class="form-control" placeholder="Enter Address" required>{{ old('address', $website->address) }}</textarea>
              </div>
              <div class="col-sm-6">
                <label for="">Logo <span class="required">*</span></label>
                @if($website->logo)
                <br>
                <img src="{{ url('storage/uploads/websites/'.$website->logo) }}" width="60" />
                <br>
                @endif
                <input type="file" class="form-control" name="logo" />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Facebook</label>
                <input type="text" name="facebook" class="form-control" value="{{ old('facebook', $website->facebook) }}" placeholder="Enter Facebook URL" />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Instagram</label>
                <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $website->instagram) }}" placeholder="Enter Facebook URL" />
              </div>
              <div class="col-sm-6">
                <label class="form-label">Linkedin</label>
                <input type="text" name="linkedin" class="form-control" value="{{ old('linkedin', $website->linkedin) }}" placeholder="Enter Facebook URL" />
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

