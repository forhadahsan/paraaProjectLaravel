@extends('admin.layout')
@push('css')
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

<style>
  .dialogelfinder {
      z-index: 20000;
  }
  .note-editor {
  z-index: 0;
}
.fullscreen{
  background-color: #fff;
}
.note-toolbar {
    z-index: auto;
 }
</style>
@endpush

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"> <a href="{{ route('galleries.index') }}" class="btn btn-info btn-sm"><i class="bx bx-arrow-back me-1"></i></a> {{ $title }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <div class="col-sm-6">
                  <label class="form-label" for="basic-default-fullname">Name</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter Name" required />
                </div>
                
                <div class="col-sm-6">
                    <label class="form-label" for="basic-default-fullname">Status</label>
                    <select name="status" class="form-control" required>
                      <option value="1">Publish</option>
                      <option value="0">Not Publish</option>
                    </select>
                  </div>
                   <div class="col-sm-6">
                    <label for="">Image</label>
                    <input type="file" class="form-control" name="image" />
                  </div>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="summernote">{{ old('short_description') }}</textarea>
                  </div>
                  <div class="mb-3">
                    
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