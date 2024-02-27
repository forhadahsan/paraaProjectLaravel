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
          <h5 class="mb-0"> <a href="{{ route('news.index') }}" class="btn btn-info btn-sm"><i class="bx bx-arrow-back me-1"></i></a> {{ $title }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <div class="col-sm-6 required">
                  <label class="form-label"  for="basic-default-fullname">Project</label>
                  <select name="project_id" class="form-select form-control" aria-label="Default select example" required>
                    <option value="">Select Project</option>
                    @foreach($projects as $project)
                    <option value="{{$project->id}}">{{ $project->title }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="col-sm-6">
                  <label class="form-label"  for="basic-default-fullname">Category</label>
                  <input type="text" name="category" class="form-control" value="{{ old('category') }}" placeholder="Enter category" />
            
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="basic-default-fullname">title</label>
                  <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter title" required />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="basic-default-fullname">WebSite URL</label>
                  <input type="text" name="website_url" class="form-control" value="{{ old('website_url') }}" placeholder="Enter Website URL" />
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="basic-default-fullname">Address </label>
                  <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Enter Address" />
                </div>
             
                <div class="col-sm-6">
                  <label class="form-label" for="basic-default-fullname">Status</label>
                  <select name="status" class="form-control" required>
                    <option value="1">Publish</option>
                    <option value="0">Not Publish</option>
                  </select>
                </div>

                <div class="row mb-3">
              <div class="col-sm-12">
                <label for="">Short Description</label>
                <textarea class="form-control summernote" name="short_description">{{ old('short_description') }}</textarea>
              </div>
            </div>

            <div class="mb-3">
              <label for="">Description</label>
              <textarea class="form-control summernote" name="description">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
              <label for="">Image</label>
              <input type="file" class="form-control" name="image" />
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
  $(document).ready(function() {
    $('.summernote').summernote({
      placeholder: 'Type your text...',
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul','ol','paragraph']],
            ["view", ["fullscreen", "codeview"]]
        ],
    });
     $('i.note-recent-color').each(function(){
               $(this).attr('style','background-color: transparent;');
            });

    if ($('.note-editor .note-toolbar').length) {
  var z_index = 900;
  $(".note-editor .note-toolbar").each(function(){
  $(this).css({'z-index': z_index});
  z_index--;
  });
}
    
  });
  
</script>
@endpush
