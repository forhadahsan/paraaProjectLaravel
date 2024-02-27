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
          <h5 class="mb-0"> <a href="{{ route('cadses.index') }}" class="btn btn-info btn-sm"><i class="bx bx-arrow-back me-1"></i></a> {{ $title }}</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('cadses.update', $cadse->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row mb-3">
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $cadse->title) }}" placeholder="Enter Title" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Date</label>
                <input type="date" name="moment" class="form-control" value="{{ $cadse->moment }}" required />
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="basic-default-fullname">Status</label>
                <select name="status" class="form-control" required>
                  <option value="1" {{ $cadse->status == 1? 'selected' : '' }}>Publish</option>
                  <option value="0" {{ $cadse->status == 0? 'selected' : '' }}>Not Publish</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label for="">Image</label>
                @if($cadse->image)
                <br>
                <img src="{{ url('storage/uploads/cadses/'.$cadse->image) }}" width="60" />
                <br>
                @endif
                <input type="file" class="form-control" name="image" />
              </div>
       
            </div>

            <div class="mb-3">
              <label for="">Description</label>
              <textarea class="form-control" name="description" id="summernote">{{ $cadse->description }}</textarea>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      placeholder: 'Cadses Description',
        tabsize: 2,
        height: 300,
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
