@extends('admin.layout')


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"> <a href="{{ route('documents.index') }}" class="btn btn-info btn-sm"><i class="bx bx-arrow-back me-1"></i></a> {{ $title }}</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col-sm-6">
                    <label class="form-label" for="basic-default-fullname">Project</label>
                    <select name="project_id" class="form-control" required>
                      <option value="">Select Document</option>
                      @foreach($projects as $project)
                      <option value="{{ $project->id }}">{{ $project->title }}</option>
                      @endforeach
                    </select>
                </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Type</label>
                <select name="type" class="form-control"">
                  <option value="">Select Type</option>
                  <option value="image">Image</option>
                  <option value="drawing">Drawing</option>
                  <option value="model">Model</option>
                  <!-- <option value="News">News</option> -->
                </select>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter Title" />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Document</label>
                <input type="file" name="document" class="form-control" required/>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Status</label>
                <select name="status" class="form-control" required>
                  <option value="1">Publish</option>
                  <option value="0">Not Publish</option>
                </select>
              </div>
              
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

@endpush
