@extends('admin.layout')
@push('css')
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
 <style>
  .dialogelfinder {
      z-index: 20000;
  }
  .fullscreen{
    background-color: #fff;
  }
  .note-editor {
    z-index: 0;
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
      <div class="card mb-4">team
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"> <a href="{{ route('galleries.index') }}" class="btn btn-info btn-sm"><i class="bx bx-arrow-back me-1"></i></a> {{ $title }}</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('galleries.update', $galleries->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="row mb-3">
              
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $galleries->name) }}" placeholder="Enter Name" required />
              </div>
              
            </div>
            <div class="mb-3">
              <label for="">description</label>
              <textarea class="form-control" name="description" id="summernote">{!! $galleries->description !!}</textarea>
            </div>
            <div class="row mb-3">
              <div class="col-sm-6">
                <label for="">Image</label>
                @if($galleries->image)
                <br>
                <img src="{{ url('uploads/galleries/'.$galleries->image) }}" width="60" />
                <br>
                @endif
                <input type="file" class="form-control" name="image" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Status</label>
                <select name="status" class="form-control" required>
                  <option value="1" {{ $galleries->status == 1? 'selected' : '' }}>Publish</option>
                  <option value="0"  {{ $galleries->status == 0? 'selected' : '' }}>Not Publish</option>
                </select>
              </div>
            </div>
            <button type="submit" style="float: right;" class="btn btn-primary">Update Save</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
